let beans = new Array();

//when the doc is loaded adds html elemt to our array
$(function() {
    for (let i = 1; i < 10; i++) {
        beans.push(`<img class="gameB${i}" id="beanImg${i}" src="../images/Background_15 (1).svg ">`);
    }
    //then we iterrate on this array and add insert the html element to our container
    for (let i = 0; i < beans.length; i++) {
        $('#game-container').prepend(beans[i]);

    }
})

//we listen for an event "click" to hide the module and activate the game
//we add the css class hide with a display none
$(function() {
        $('#confBtn').on('click', function() {
            $('#myModal-seven-mod').addClass('hide');
            startGame();
        })
    })
    //on click we remove the class "hide" to reuse the modul
$(function() {
        $('#btn').on('click', function() {
            $('#myModal-seven-mod').removeClass('hide');

        })
    })
    //we wait 2sec to pick a random bean while we rotate trought the beans
function startGame() {
    setTimeout(() => {
        pickRandom();
    }, 2000);
    rotate();
}
//create random number 
function getRandomIndex(max) {
    return Math.floor(Math.random() * max);
}
//our max index is 9 because we have 9 beans ,
function pickRandom() {
    let n = getRandomIndex(9);
    // when the random number is lower than 3 you get the specific price with an aler message
    if (n < 3) {
        $(`#beanImg${n}`).addClass('active');
        setTimeout(() => {
            $('#myModal-game-mod').addClass('show') //tuka e nagradata
                //after you win we remove the color green from the bean
            $(`#beanImg${n}`).removeClass('active');
        }, 300)
    } else if (n < 5) {
        $(`#beanImg${n}`).addClass('active');

        setTimeout(() => {
            $('#myModal-secondp-mod').addClass('show') //tuka e nagradata
            $(`#beanImg${n}`).removeClass('active');
        }, 300)
    } else {
        $(`#beanImg${n}`).addClass('active');
        setTimeout(() => {
            $('#myModal-thurdp-mod').addClass('show') //tuka e nagradata
            $(`#beanImg${n}`).removeClass('active');
        }, 300)
    }
}

$('#close').on('click', function() {
    $('#myModal-game-mod').removeClass('show') //tuka e nagradata

})

//rotate trough the beans to get the efect of "rotation"
function rotate() {
    //we wait to add the class active to the bean element
    setTimeout(() => {
            $(`#beanImg1`).addClass('active');
        }, 100)
        //we wait to remove the class active 
    setTimeout(() => {
        $(`#beanImg1`).removeClass('active');
    }, 200)

    //
    setTimeout(() => {
        $(`#beanImg2`).addClass('active');
    }, 300)
    setTimeout(() => {
        $(`#beanImg2`).removeClass('active');
    }, 400)

    //
    setTimeout(() => {
        $(`#beanImg3`).addClass('active');
    }, 500)
    setTimeout(() => {
        $(`#beanImg3`).removeClass('active');
    }, 600)

    //
    setTimeout(() => {
        $(`#beanImg4`).addClass('active');
    }, 700)
    setTimeout(() => {
        $(`#beanImg4`).removeClass('active');
    }, 800)

    //
    setTimeout(() => {
        $(`#beanImg5`).addClass('active');
    }, 900)
    setTimeout(() => {
            $(`#beanImg5`).removeClass('active');
        }, 1000)
        //
    setTimeout(() => {
        $(`#beanImg6`).addClass('active');
    }, 1100)
    setTimeout(() => {
            $(`#beanImg6`).removeClass('active');
        }, 1200)
        //
    setTimeout(() => {
        $(`#beanImg7`).addClass('active');
    }, 1300)
    setTimeout(() => {
            $(`#beanImg7`).removeClass('active');
        }, 1400)
        //
    setTimeout(() => {
        $(`#beanImg8`).addClass('active');
    }, 1500)
    setTimeout(() => {
            $(`#beanImg8`).removeClass('active');
        }, 1600)
        //
    setTimeout(() => {
        $(`#beanImg9`).addClass('active');
    }, 1700)
    setTimeout(() => {
            $(`#beanImg9`).removeClass('active');
        }, 1800)
        //
    setTimeout(() => {
        $(`#beanImg1`).addClass('active');
    }, 1000)
    setTimeout(() => {
        $(`#beanImg1`).removeClass('active');
    }, 1000)
}

// we remove the show class from our selected modul and add hide 
$(function() {
    $('.close').on('click', function() {
        $('#myModal-thurdp-mod').removeClass('show');
        $('#myModal-game-mod').addClass('hide')
    })
    $('.close').on('click', function() {
        $('#myModal-secondp-mod').removeClass('show');
        $('#myModal-game-mod').addClass('hide')
    })
    $('.close').on('click', function() {
        $('#myModal-game-mod').removeClass('show');
        $('#myModal-game-mod').addClass('hide')
    })
})