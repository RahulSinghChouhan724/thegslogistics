const progress = document.getElementById('progress')
const prev = document.getElementById('prev')
const next = document.getElementById('next')
const circles = document.querySelectorAll('.circle')
let arr = ["1753941055053403", "6924036680930975", "0454771762030634", "8757099079724429", "0963172295060546", "5863470976309639", "4849993718209099", "5314246439452677"]
let datearr = ["30/10/2021", "1/11/2021", "3/11/2021", "4/11/2021", "5/11/2021", "6/11/2021", "7/11/2021", "8/11/2021", "8/11/2021", ]

let currentActive = 2

next.addEventListener('click', () => {
    currentActive++

    myFunction()

})

function myFunction() {
    var checkel = document.getElementById("Tid").value;
    var element = document.getElementById("hide");
    for (i = 0; i <= arr.length; i++) {
        if (arr[i] == checkel) {
            if (element.style.display == "none") {
                element.style.display = "block";
                var Pdate = datearr[i];
                document.getElementById("PD").innerHTML = Pdate;
                calDate(datearr[i])
                if (currentActive > circles.length) {
                    currentActive = circles.length
                }
                update()
            }
        } else {
            element.style.display == "none";
        }
    }
}
prev.addEventListener('click', () => {
    currentActive--

    if (currentActive < 1) {
        currentActive = 1
    }

    update()
})

function update() {
    circles.forEach((circle, idx) => {
        if (idx < currentActive) {
            circle.classList.add('active')
        } else {
            circle.classList.remove('active')
        }
    })

    const actives = document.querySelectorAll('.active')

    progress.style.width = (actives.length - 1) / (circles.length - 1) * 100 + '%'

    if (currentActive === 1) {
        prev.disabled = true
    } else if (currentActive === circles.length) {
        next.disabled = true
    } else {
        prev.disabled = true
        next.disabled = true
    }
    return 0;
}

function calDate() {

    Date.prototype.addDays = function(days) {
        let date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
    }
    let date = new Date();
    var nd = date.addDays(5)

    document.getElementById("ED").innerHTML = nd;
}