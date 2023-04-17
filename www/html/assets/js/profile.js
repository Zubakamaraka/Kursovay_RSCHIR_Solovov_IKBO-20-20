let colInput = document.getElementsByClassName('count');
let plusBtn = document.getElementsByClassName('plus');
let minusBtn = document.getElementsByClassName('minus');
let deleteBtn = document.getElementsByClassName('deleteBtn');
let gameId = document.getElementsByClassName('game');

//increase game in cart
for (let i = 0; i < plusBtn.length; i++) {
    plusBtn[i].onclick = function() {
        jQuery.ajax({
            type: "POST",
            url: "./vendor/cartupdate.php",
            dataType: "JSON",
            data: {
                "id": gameId[i].getAttribute('data-gameid'),
                "count": +colInput[i].value + +1
            }
        });
        document.location.reload();
    }
}

//decrease game in cart
for (let i = 0; i < minusBtn.length; i++) {
    minusBtn[i].onclick = function() {
        if(colInput[i].value > 1){
            jQuery.ajax({
                type: "POST",
                url: "./vendor/cartupdate.php",
                dataType: "JSON",
                data: {
                    "id": gameId[i].getAttribute('data-gameid'),
                    "count": +colInput[i].value - +1
                },
                success: function(msg){
                    alert("Data saved")
                }
            });
            document.location.reload();
        }
    }
}

//delete game from cart
for (let i = 0; i < deleteBtn.length; i++) {
    deleteBtn[i].onclick = function() {
        jQuery.ajax({
            type: "POST",
            url: "./vendor/cartdelete.php",
            dataType: "JSON",
            data: {
                "id": gameId[i].getAttribute('data-gameid'),
            }
        });
        document.location.reload();
    }
}

