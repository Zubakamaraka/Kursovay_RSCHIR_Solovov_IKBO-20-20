let addToCartBtn = document.getElementById('cart_btn');
let gameId = document.getElementById('game').getAttribute('data-gameid');

let comBtn = document.getElementById('commentButton');
let grade = $('#grade').val();
let comText = document.getElementById("textarea");

//add game to cart
addToCartBtn.onclick = function() {
    jQuery.ajax({
        type: "POST",
        url: "./vendor/cartadd.php",
        dataType: "JSON",
        data: {
            "id": gameId
        }
    });
}

//add comments for game
comBtn.onclick = function() {
    jQuery.ajax({
        type: "POST",
        url: "./vendor/commentsadd.php",
        dataType: "JSON",
        data: {
            "id": gameId,
            "grade": grade,
            "text": comText.value
        },
    });
    document.location.reload();
}