async function order(event) {
  const button = event.target;
  const productId = button.getAttribute('product_id');
  // CSRFトークンを取得
  const token = document.querySelector('meta[name="csrf_token"]').getAttribute('content');
  try {
      await fetch('http://127.0.0.1:8000/order', {
          method: "POST",
          headers: {
              'Content-Type': 'application/json', 
              'X-CSRF-TOKEN': token // CSRFトークンをヘッダーに追加
          },
          body: JSON.stringify({ "product_id": productId })
      })
          .then(res => {
              if (res.ok) {
                console.log(document);
				return res.json();
              } else {
                  throw new Error('カートに追加できませんでした');
              }
          })
          .then(json => {
            //   alert('カートに追加しました');
              // ここで取得したデータを処理する
              console.log(json)
          });
  } catch (error) {
      console.log('エラー', error);
  }
}

async function addcart(event) {
    // 選択したプロダクト情報を取得
    const product = event.target;

    // 要素を取得
    let productId = product.getAttribute('product_id');
    let productName = product.getAttribute('product_name');
    let productPrice = product.getAttribute('product_price_tax');

    // クッキーの配列用
    let productIdArray = [];
    let productNameArray = [];
    let productPriceArray = [];

    // 初回チェックフラグ
    let isFirst = true;

    // 欲しい要素
    let needElements = ['product_id', 'product_name', 'product_price'];

    // クッキー解析と保存
    let cookie = document.cookie.split('; ');
    console.log(cookie);
    cookie.forEach(function (value) {
        let content = value.split('=');
         // 配列内にあるかチェック (needElements)
        if (needElements.includes(content[0])) {
            
            if (content[0] == 'product_id') {
                content[1].split(',').forEach(function (value) {
                    productIdArray.push(value);
                });
            }
            console.log('product id check end');

            if (content[0] == 'product_name') {
                content[1].split(',').forEach(function (value) {
                    productNameArray.push(value);
                });
            }

            console.log('product name check end');

            if (content[0] == 'product_price') {
                content[1].split(',').forEach(function (value) {
                    productPriceArray.push(value);
                });
            }
            isFirst = false;
            console.log('included in array')
        } else {
            // 配列内にない場合は新規追加
            if (isFirst) {
                productIdArray.push(productId);
                productNameArray.push(productName);
                productPriceArray.push(productPrice);
                console.log('first push');
            }
        
        }
    });
   
    // クッキーに保存
    document.cookie = 'product_id=' + productIdArray + ';';
    document.cookie = 'product_name=' + productNameArray + ';';
    document.cookie = 'product_price=' + productPriceArray + ';';
}