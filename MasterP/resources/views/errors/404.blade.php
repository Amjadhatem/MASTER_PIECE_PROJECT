<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .the-width {
    display: flex;
    background: #000;
    height: 100vh;
    align-items: center;
}
.the-width > div {
    text-align: center;
    max-width: 450px;
    margin: 0 auto;
    position: relative;
}
.four04 {
    position: relative;
}
h1 {
    font-size: 8em;
    margin: 0;
    color: #fff;
}
h2 {
    color: #fff;
    z-index: 1;
    position: relative;
}
.target-cont {
	  display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    width: 7em;
    height: 7em;
    position: absolute;
		top: 0;
		bottom: 0;
		margin: auto;
    z-index: 1;
    animation: snipe 5s linear infinite alternate;
}
.target-cont:before {
    content: '';
    display: block;
    background-color: red;
    width: 0.5em;
    height: 0.5em;
    border-radius: 50%;
		box-shadow: 0px 0px 10px red;
    z-index: 3;
}
.target-cont .cover {
    position: absolute;
    width: 11em;
    height: 11em;
    border: 14em #000 solid;
    border-radius: 500%;
	  background: rgba(106, 117, 106, 0.5);
	    background-image: linear-gradient(to right top, rgba(18, 254, 0, 0.3), rgba(14, 253, 0, 0.3), rgba(10, 251, 1, 0.3), rgba(5, 250, 1, 0.3), rgba(0, 248, 1, 0.3));
}
.marks {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
		width: 80%;
		height: 80%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 0.3em #948e8e solid;
		border-radius: 50%;
}
.marks:before,
.marks:after{
		content: "";
    width: 0.3em;
    height: 8em;
    background: #948e8e;
    display: block;
    border-radius: 6px;
    position: absolute;
}
.marks:after {
    transform: rotate(90deg);
}
@keyframes snipe {
    0% { left: 0%;}
    100%{ left: 80%}
}
    </style>
</head>
<body>
    <div class="the-width">
		<div class="">
			<div class="four04">
				<h1>404</h1>
				<div class="target-cont">
					<div class="cover"></div>
					<div class="marks"></div>
				</div>
			</div>	
			<h2>The page you requested was not found.</h2>
	</div>
</div>
</body>
</html>