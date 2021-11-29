<?php
    include_once db.php;
    $tnum = $_POST['tnum'];
    $sql = "SELECT id FROM tdetails where tnum = '$tnum';
    $result = mysqli_query($sql);
 ?>


<script>

const progress = document.getElementById('progress')
const prev = document.getElementById('prev')
const next = document.getElementById('next')
const circles = document.querySelectorAll('.circle')

var Sdate = '<?=$result?>';

#let currentActive = a;

next.addEventListener('click', () => {
    currentActive++

    myFunction()

})

function myFunction() {
    var cdate = date.getTime();

    // To calculate the time difference of two dates
    var Difference_In_Time = cdate.getTime() - Sdate.getTime();

    // To calculate the no. of days between two dates
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

      if(  var Difference_In_Days >= 1)
      {
        let currentActive = -1;
        update()
      }else if( )

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
</script>
