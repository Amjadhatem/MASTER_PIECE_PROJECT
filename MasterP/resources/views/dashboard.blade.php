@extends('include.app')
  
{{-- @section('title', 'Dashboard - Laravel Admin Panel With Login and Registration') --}}
  
@section('contents')
<style>
  @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap");
/* body {
  background: #e0e0e0;
} */
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  transition: all 0.34s ease;
  font-family: "Nunito Sans", sans-serif;
}
#box {
  width: 270px;
  height: 300px;
  background: transparent;
  box-shadow: 9px 9px 18px #bebebe, -9px -9px 18px rgb(211, 211, 211);
  backdrop-filter: blur(25px);
  border-bottom: solid 7px rgba(0, 0, 0, 0.3);
  border-radius: 7px;
  color: transparent;
  text-align: center;
  overflow: hidden;
  position: absolute;
  top: 50%;
  left: 56%;
  transform: translate(-50%, -50%);
}
#two {
  height: 0;
}
#month {
  background: rgb(73, 73, 244);
  opacity: .6;
  padding: 7px 0;
  font-size: 23px;
  color: white;
}
#day,
#year {
  font-size: 18px;
  padding: 15px 0 5px 0;
}
#year {
  padding: 5px 0 15px 0;
}
#date {
  font-size: 100px;
  font-weight: 700;
  padding: 0;
  margin: -5px auto;
}
#theme {
  position: absolute;
  top: 0;
  right: 0;
  margin: 10px;
  font-size: 2vw;
  color: grey;
}
#check {
  display: none;
}

</style>
<div id="theme">
  <input type="checkbox" id="check" checked>
  <i class="fa-solid fa-circle-half-stroke"></i>
</div>
<div id="box">
  <div>
    <div id="month"></div>
  </div>
  <div id="two">
    <div id="day"></div>
    <div id="date"></div>
    <div id="year"></div>
  </div>
</div>

<script>
  var date = document.getElementById("date"),
  day = document.getElementById("day"),
  month = document.getElementById("month"),
  year = document.getElementById("year"),
  days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ],
  months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ],
  box = document.getElementById("box"),
  theme = document.getElementById("theme");

theme.addEventListener("click", () => {
  changeTheme();
});

function update() {
  let now = new Date();
  date.innerText = now.getDate();
  day.innerText = days[now.getDay()];
  month.innerText = months[now.getMonth()];
  year.innerText = now.getFullYear();
}

function changeTheme() {
  let check = document.getElementById("check");
  if (check.checked) {
    document.body.style.background = "grey";
    theme.style.color = "#e0e0e0";
    box.style.color = "#e0e0e0";
    box.style.boxShadow =
      "9px 9px 18px #5f5f5f, -9px -9px 18px #999";
    check.checked = false;
    theme.style.transform = "rotateZ(180deg)";
  } else {
    document.body.style.background = "#e0e0e0";
    theme.style.color = "grey";
    box.style.color = "grey";
    box.style.boxShadow =
      "9px 9px 18px #bebebe, -9px -9px 18px #fff";
    check.checked = true;
    theme.style.transform = "rotateZ(-180deg)";
  }
}

document.body.onload = () => {
  setInterval(update, 1000);
  setTimeout(() => {
    document.getElementById("two").style.height = "216px";
    box.style.color = "grey";
  }, 1000);
};

</script>
@endsection