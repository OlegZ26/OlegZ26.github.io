function addLines() {

    var lineB = document.querySelector('.line--B');
    var lineC = document.querySelector('.line--C');
    var lineD = document.querySelector('.line--D');

    var pointB = document.querySelector('.point--B');
    var pointC = document.querySelector('.point--C');
    var pointD = document.querySelector('.point--D');

    pointB.addEventListener('click', function(){
        lineB.classList.toggle('hidden');
        flag = true;
    });

    pointC.addEventListener('click', function(){
        lineC.classList.toggle('hidden');
        flag = true;
    });

    pointD.addEventListener('click', function(){
        lineD.classList.toggle('hidden');
        flag = true;
    });

}


function removeLines() {
    var lines = document.querySelectorAll('.lines path');
    var allWindow = document.querySelector('.layout');

    allWindow.addEventListener('click', function(){
        for (var i = 0; i < lines.length; i++) {
            lines[i].classList.add('hidden');
        }
    });
}


function shadows() {

    var pointA = document.querySelector('.point--A');
    var pointB = document.querySelector('.point--B');
    var pointC = document.querySelector('.point--C');
    var pointD = document.querySelector('.point--D');

    var shadowsA = pointA.getElementsByTagName('div');
    var shadowsB = pointB.getElementsByTagName('div');
    var shadowsC = pointC.getElementsByTagName('div');
    var shadowsD = pointD.getElementsByTagName('div');

    var timerId;

    pointA.addEventListener('mouseover', function(){
        timerId = setTimeout(function makeShadows(){
            for (var i = 0; i < shadowsA.length; i++) {
                shadowsA[i].classList.toggle('hidden');
            }
            timerId = setTimeout(makeShadows, 500);
        }, 500);
    })

    pointA.addEventListener('mouseout', function(){
        for (var i = 0; i < shadowsA.length; i++) {
            shadowsA[i].classList.add('hidden');
        }
        clearTimeout(timerId);
    })

    pointB.addEventListener('mouseover', function(){
        timerId = setTimeout(function makeShadows(){
            for (var i = 0; i < shadowsB.length; i++) {
                shadowsB[i].classList.toggle('hidden');
            }
            timerId = setTimeout(makeShadows, 500);
        }, 500);
    })

    pointB.addEventListener('mouseout', function(){
        for (var i = 0; i < shadowsB.length; i++) {
            shadowsB[i].classList.add('hidden');
        }
        clearTimeout(timerId);
    })

    pointC.addEventListener('mouseover', function(){
        timerId = setTimeout(function makeShadows(){
            for (var i = 0; i < shadowsC.length; i++) {
                shadowsC[i].classList.toggle('hidden');
            }
            timerId = setTimeout(makeShadows, 500);
        }, 500);
    })

    pointC.addEventListener('mouseout', function(){
        for (var i = 0; i < shadowsC.length; i++) {
            shadowsC[i].classList.add('hidden');
        }
        clearTimeout(timerId);
    })

    pointD.addEventListener('mouseover', function(){
        timerId = setTimeout(function makeShadows(){
            for (var i = 0; i < shadowsD.length; i++) {
                shadowsD[i].classList.toggle('hidden');
            }
            timerId = setTimeout(makeShadows, 500);
        }, 500);
    })

    pointD.addEventListener('mouseout', function(){
        for (var i = 0; i < shadowsD.length; i++) {
            shadowsD[i].classList.add('hidden');
        }
        clearTimeout(timerId);
    })
}


addLines();
removeLines();
shadows();