//validationForm クラス と novalidate 属性を指定した form 要素を独自に検証
document.addEventListener('DOMContentLoaded', () => {
    //validationForm クラスを指定した最初の form 要素を取得
    const validationForm = document.getElementsByClassName('validationForm')[0];
    //初回送信前にはエラーを表示しない（送信時及び送信後にエラーがあればエラーを表示）
    let validateAfterFirstSubmit = true;
    //エラーを表示する span 要素に付与するクラス名
    const errorClassName = 'error-js';
    
    // 利用規約チェックボックスによる送信ボタンの制御
    const agreeTermsCheckbox = document.querySelector('input[name="agree_terms"]');
    const submitButton = document.querySelector('.btn-submit');

    if (submitButton && agreeTermsCheckbox) {
        // 初期状態でチェックを外し、ボタンを無効化
        agreeTermsCheckbox.checked = false;
        submitButton.disabled = true;
        submitButton.style.opacity = '0.5';
        submitButton.style.backgroundColor = '#ccc';

        // ページ更新時にチェックを外す
        window.addEventListener('pageshow', function(event) {
            agreeTermsCheckbox.checked = false;
            submitButton.disabled = true;
            submitButton.style.opacity = '0.5';
            submitButton.style.backgroundColor = '#ccc';
        });

        // チェックボックスの状態が変更されたときの処理
        agreeTermsCheckbox.addEventListener('change', function() {
            if (this.checked) {
                submitButton.disabled = false;
                submitButton.style.opacity = '1';
                submitButton.style.backgroundColor = '#0066CC';
            } else {
                submitButton.disabled = true;
                submitButton.style.opacity = '0.5';
                submitButton.style.backgroundColor = '#ccc';
            }
        });
    }

    if(validationForm) {
      //required クラスを指定された要素の集まりを取得して変数に代入 
      const requiredElems = document.querySelectorAll('.required');
      //pattern クラスを指定された要素の集まりを取得して変数に代入 
      const patternElems =  document.querySelectorAll('.pattern');
      //equal-to クラスを指定された要素の集まりを取得して変数に代入 
      const equalToElems = document.querySelectorAll('.equal-to');
      //minlength クラスを指定された要素の集まりを取得して変数に代入 
      const minlengthElems =  document.querySelectorAll('.minlength');
      //maxlength クラスを指定された要素の集まりを取得して変数に代入 
      const maxlengthElems =  document.querySelectorAll('.maxlength');
      //showCount クラスを指定された要素の集まりを取得して変数に代入 
      const showCountElems =  document.querySelectorAll('.showCount');
   
      //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
      //elem ：対象の要素
      //className ：エラーメッセージの要素に追加するクラス名
      //defaultMessage：デフォルトのエラーメッセージ
      const addError = (elem, className, defaultMessage) => {
        let errorMessage = defaultMessage;
        if(elem.hasAttribute('data-error-' + className)) { 
          const dataError = elem.getAttribute('data-error-' + className);
          if(dataError) {
            errorMessage = dataError;
          }
        }
        if(!validateAfterFirstSubmit) {
          const errorSpan = document.createElement('span');
          errorSpan.classList.add(errorClassName, className);
          errorSpan.setAttribute('aria-live', 'polite');
          errorSpan.textContent = errorMessage;
          
          // ラベル要素を取得
          const label = elem.parentNode.querySelector('label');
          if (label) {
            // ラベルの中に追加
            label.appendChild(errorSpan);
          } else {
            // ラベルが見つからない場合は従来通り親要素に追加
            elem.parentNode.appendChild(errorSpan);
          }
        }
      }
   
      //値が空かどうかを検証及びエラーを表示する関数（空の場合は true を返す）
      //elem ：対象の要素
      const isValueMissing = (elem) => {
        //ラジオボタンの場合
        if(elem.tagName === 'INPUT' && elem.getAttribute('type') === 'radio') {
          //エラーメッセージの要素に追加するクラス名（data-error-xxxx の xxxx）
          const className = 'required-radio';
          //エラーを表示する span 要素がすでに存在すれば取得（存在しなければ null が返る）
          const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
          //選択状態の最初のラジオボタン要素を取得
          const checkedRadio = elem.parentElement.querySelector('input[type="radio"]:checked');
          //選択状態のラジオボタン要素を取得できない場合
          if(checkedRadio === null) {
           if(!errorSpan) {
             //addError() を使ってエラーメッセージ表示する span 要素を生成して追加
              addError(elem, className, '※選択は必須です');
            }
            return true;
          } else{ //いずれかのラジオボタンが選択されている場合
            //エラーメッセージ表示する span 要素がすでに存在すれば削除してエラーをクリア
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          } 
        }else if(elem.tagName === 'INPUT' && elem.getAttribute('type') === 'checkbox') {
          //チェックボックスの場合
          const className = 'required-checkbox';
          const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
          //選択状態の最初のチェックボックス要素を取得
          const checkedCheckbox = elem.parentElement.querySelector('input[type="checkbox"]:checked');
          if(checkedCheckbox === null) {
            if(!errorSpan) {
              addError(elem, className, '※選択は必須です');
            }
            return true;
          }else{
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          }
        }else{
          //テキストフィールドやテキストエリア、セレクトボックスの場合
          const className = 'required';
          const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
          //値が空の場合はエラーを表示して true を返す（trim() で前後の空白文字を削除）
          if(elem.value.trim().length === 0) {
            if(!errorSpan) {
              if(elem.tagName === 'SELECT') {
                //セレクトボックスの場合
                addError(elem, className, '※選択は必須です');
              }else{
                //テキストフィールドやテキストエリアの場合
                addError(elem, className, '※入力は必須です');
              }
            }
            return true;
          }else{
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          }
        }
      }
   
      //required クラスを指定された要素に input イベントを設定（値が変更される都度に検証）
      requiredElems.forEach( (elem) => {
        //ラジオボタンまたはチェックボックスの場合
        if(elem.tagName === 'INPUT' && (elem.getAttribute('type') === 'radio' || elem.getAttribute('type') === 'checkbox' )){
          //親要素を基点に全てのラジオボタンまたはチェックボックス要素を取得
          const elems = elem.parentElement.querySelectorAll(elem.tagName);
          //取得した全ての要素に change イベントを設定
          elems.forEach( (elemsChild) => {
            elemsChild.addEventListener('change', () => {
              //それぞれの要素の選択状態が変更されたら検証を実行
              isValueMissing(elemsChild);
            });
          });
        }else{
          elem.addEventListener('input', () => {
            //要素の値が変更されたら検証を実行
            isValueMissing(elem);
          });
        }
      });
   
      //指定されたパターンにマッチしているかを検証する関数（マッチしていない場合は true を返す）
      //elem ：対象の要素
      const isPatternMismatch = (elem) => {
        //検証対象のクラス名
        const className = 'pattern';
        //対象の（パターンが記述されている） data-xxxx 属性（data-pattern）
        const attributeName = 'data-' + className;
        //data-pattern 属性にパターンが指定されていればその値をパターンとする
        let pattern = new RegExp('^' + elem.getAttribute(attributeName) + '$');
        //data-pattern 属性の値が email の場合
        if(elem.getAttribute(attributeName) ==='email') {
          pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ui;
        }else if(elem.getAttribute(attributeName) ==='tel') { //data-pattern 属性の値が tel の場合
          pattern = /^\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}$/;
        }
        //エラーを表示する span 要素がすでに存在すれば取得
        const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
        //対象の要素の値が空でなければパターンにマッチするかを検証
        if(elem.value.trim() !=='') {
          if(!pattern.test(elem.value)) {
            if(!errorSpan) {
              addError(elem, className, '入力された値が正しくないようです');
            }
            return true;
          }else{
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          }
        }else if(elem.value ==='' && errorSpan) {
          elem.parentNode.removeChild(errorSpan);
        }
      }
   
      //pattern クラスを指定された要素に input イベントを設定（値が変更される都度に検証）
      patternElems.forEach( (elem) => {
        elem.addEventListener('input', () => {
          //要素の値が変更されたら検証を実行
          isPatternMismatch(elem);
        });
      });
   
      //指定された要素と値が一致するかどうかを検証する関数
      const isNotEqualTo = (elem) => {
        //検証対象のクラス名
        const className = 'equal-to';
        //対象の（比較対象の要素の id が記述されている）data-xxxx 属性（data-equal-to）
        const attributeName = 'data-' + className;
        //比較対象の要素の id 
        const equalTo = elem.getAttribute(attributeName);
        //比較対象の要素
        const equalToElem = document.getElementById(equalTo);
        //エラーを表示する span 要素がすでに存在すれば取得
        const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
        //対象の要素の値が空でなければ値が同じかを検証
        if(elem.value.trim() !=='' && equalToElem.value.trim() !=='') {
          if(equalToElem.value !== elem.value) {
            if(!errorSpan) {
              addError(elem, className, '入力された値が一致しません');
            }
            return true;
          }else{
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          }
        } 
      }
      //equal-to クラスを指定された要素に input イベントを設定（値が変更される都度に検証）
      equalToElems.forEach( (elem) => {
        elem.addEventListener('input', () => {
          isNotEqualTo(elem);
        });
        //値を比較する要素（data-equal-to 属性に指定されている id を持つ要素）を取得
        const compareTarget = document.getElementById(elem.getAttribute('data-equal-to'));
        if(compareTarget) {
          //値を比較する要素の値が変更された場合も、値が同じかどうかを検証
          compareTarget.addEventListener('input', () => {
            isNotEqualTo(elem);
          });
        }
      });
      
      //サロゲートペアを考慮した文字数を返す関数
      const getValueLength = (value) => {
        return (value.match(/[\uD800-\uDBFF][\uDC00-\uDFFF]|[\s\S]/g) || []).length;
      }
   
      //指定された最小文字数を満たしているかを検証する関数（満たしていない場合は true を返す）
      const isTooShort = (elem) => {
        //対象のクラス名
        const className = 'minlength';
        //対象の data-xxxx 属性の名前
        const attributeName = 'data-' + className;
        //data-minlength 属性から最小文字数を取得
        const minlength = elem.getAttribute(attributeName);
        //エラーを表示する span 要素がすでに存在すれば取得（存在しなければ null が返る）
        const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
        //値が空でなければ
        if(elem.value !=='') {
          //サロゲートペアを考慮した文字数を取得
          const valueLength = getValueLength(elem.value);
          //値がdata-minlength属性で指定された最小文字数より小さければエラーを表示してtrueを返す
          if(valueLength < minlength) {
            if(!errorSpan) {
              addError(elem, className, minlength + '文字以上で入力ください');
            }
            return true;
          //最小文字数より大きければエラーがあれば削除して false を返す
          }else{
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          }
        //値が空でエラーを表示する要素が存在すれば削除
        }else if(elem.value ==='' && errorSpan) {
          elem.parentNode.removeChild(errorSpan);
        }
      }
   
      //minlength クラスを指定された要素に input イベントを設定（値が変更される都度に検証）
      minlengthElems.forEach( (elem) => {
        elem.addEventListener('input', () => {
          isTooShort(elem);
        });
      }); 
   
      //指定された最大文字数を満たしているかを検証する関数（満たしていない場合は true を返す）
      const isTooLong = (elem) => {
        //対象のクラス名
        const className = 'maxlength';
        //対象の data-xxxx 属性の名前
        const attributeName = 'data-' + className;
        //data-maxlength 属性から最大文字数を取得
        const maxlength = elem.getAttribute(attributeName);
        //エラーを表示する span 要素がすでに存在すれば取得（存在しなければ null が返る）
        const errorSpan = elem.parentElement.querySelector('.' + errorClassName + '.' + className);
        if(elem.value !=='') {
          //サロゲートペアを考慮した文字数を取得
          const valueLength = getValueLength(elem.value);
          //値がdata-maxlengthで指定された最大文字数より大きい場合はエラーを表示してtrueを返す
          if(valueLength > maxlength) {
            if(!errorSpan) {
              addError(elem, className, maxlength + '文字以内で入力ください');
            }
            return true;
          }else{
            if(errorSpan) {
              elem.parentNode.removeChild(errorSpan);
            }
            return false;
          }
        }else if(elem.value ==='' && errorSpan) {
          elem.parentNode.removeChild(errorSpan);
        }
      }
   
      //maxlength クラスを指定された要素に input イベントを設定
      maxlengthElems.forEach( (elem) => {
        elem.addEventListener('input', () => {
          isTooLong(elem);
        });
      }); 
      
      //data-maxlength属性を指定した要素でshowCountクラスが指定されていれば入力文字数を表示
      showCountElems.forEach( (elem) => {
        //data-maxlength 属性の値を取得
        const dataMaxlength = elem.getAttribute('data-maxlength');
        //data-maxlength 属性の値が存在し数値であれば
        if(dataMaxlength && !isNaN(dataMaxlength)) {
          //入力文字数を表示する p 要素を生成
          const countElem = document.createElement('p');
          //生成した p 要素にクラス countSpanWrapper を設定
          countElem.classList.add('countSpanWrapper');
          //p要素のコンテンツを作成（.countSpanを指定したspan要素にカウントを出力。初期値は0）
          countElem.innerHTML = '<span class="countSpan">0</span>/' + parseInt(dataMaxlength);
          //入力文字数を表示する p 要素を追加
          elem.parentNode.appendChild(countElem);
        }
        //input イベントを設定
        elem.addEventListener('input', (e) => {
          //上記で作成したカウントを出力する span 要素を取得
          const countSpan = elem.parentElement.querySelector('.countSpan');
          //カウントを出力する span 要素が存在すれば
          if(countSpan) {
            //入力されている文字数（e.currentTarget は elem. のこと）
            //サロゲートペアを考慮した文字数を取得
            const count = getValueLength(e.currentTarget.value);
            //span 要素に文字数を出力
            countSpan.textContent = count;
            //文字数が dataMaxlength（data-maxlength 属性の値）より大きい場合は文字を赤色に
            if(count > dataMaxlength) {
              countSpan.style.setProperty('color', 'red');
              //span 要素に overMaxCount クラス（スタイル設定用）を追加
              countSpan.classList.add('overMaxCount');
            }else{
              //dataMaxlength 未満の場合は文字を元に戻す
              countSpan.style.removeProperty('color');
              //span 要素から overMaxCount クラスを削除
              countSpan.classList.remove('overMaxCount');
            } 
          } 
        });
      });
   
      //送信時の処理
      validationForm.addEventListener('submit', (e) => {
        validateAfterFirstSubmit = false;
        //必須の検証
        requiredElems.forEach( (elem) => {
          if(isValueMissing(elem)) {
            e.preventDefault();
          }
        });
        //パターンの検証
        patternElems.forEach( (elem) => {
          if(isPatternMismatch(elem)) {
            e.preventDefault();
          }
        });
        //.minlength を指定した要素の検証
        minlengthElems.forEach( (elem) => {
          if(isTooShort(elem)) {
            e.preventDefault();
          }
        });
        //.maxlength を指定した要素の検証
        maxlengthElems.forEach( (elem) => {
          if(isTooLong(elem)) {
            e.preventDefault();
          }
        });
        //2つの値（メールアドレス）が一致するかどうかを検証
        equalToElems.forEach( (elem) => {
          if(isNotEqualTo(elem)) {
            e.preventDefault();
          }
        });
        
        //.error の要素を取得
        const errorElem = document.querySelector('.' + errorClassName);
        if(errorElem) {
          const errorElemOffsetTop = errorElem.offsetTop;
          //エラーの要素の位置へスクロール
          window.scrollTo({
            top: errorElemOffsetTop - 40,
            //スムーススクロール
            behavior: 'smooth'
          });
        }
      });
    }
  });
  