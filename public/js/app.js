let brand_hover = document.getElementById('brand_hover');
let brand_menu = document.getElementById("brand_menu");

brand_hover.addEventListener('mouseover', function() {
    $('.brand_menu').css( 'display', 'block' );
});

brand_hover.addEventListener('mouseleave', function() {
    $('.brand_menu').css( 'display', 'none' );
});

brand_menu.addEventListener('mouseover', function() {
    $('.brand_menu').css( 'display', 'block' );
});

brand_menu.addEventListener('mouseleave', function() {
    $('.brand_menu').css( 'display', 'none' );
});


function clickRegistButton() {
    document.forms.regist_form.submit();
}

function clickMailButton() {

    if (mail_form.name.value == ""){
        alert("お名前を入力してください");
        return false;
    } else if (mail_form.tel.value == ""){
        alert("電話番号を入力してください");
        return false;
    } else if (mail_form.mail.value == ""){
        alert("メールアドレスを入力してください");
        return false;
    } else if (mail_form.content.value == ""){
        alert("お問い合わせ内容を入力してください");
        return false;
    } else {
        document.forms.mail_form.submit();
    }
}

function fileCheckMain(){

    let file_btn = $("#file_btn_main");
  
    // addEventListener() の jQuery による略記
    file_btn.off('change');
    file_btn.on("change", function(evt){
  
    // 変数 $file_btn に格納済みのjQueryオブジェクトを使っても良い。
    let elm = file_btn[0];
    // プレビュー処理など。

    $('.img_tmb_main').html('');
    var file = elm.files;

    var img_count = 1;
    $(file).each(function(i) {
    // 8枚まで
    if (img_count > 8) {
        return false;
    }

    if (! file[i].type.match('image.*')) {
        $(this).val('');
        elm.value = null;
        alert(`画像ファイルを選択してください` );
        $('.img_tmb_main').html('');
        return;
    }

    var reader = new FileReader();
    reader.onload = function() {
        var img_src = $('<img>').attr('src', reader.result);
        $('.img_tmb_main').append(img_src);
    }
    reader.readAsDataURL(file[i]);

    img_count = img_count + 1;
    });
  
  })
};
