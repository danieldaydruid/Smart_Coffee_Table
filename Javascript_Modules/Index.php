<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 1px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 3px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  margin-left: auto;
  margin-right: auto;
  width:100%;
  padding: 12px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}


.menu li_volume_plus {
  margin-left: auto;
  margin-right: auto;
  width:41%;
  padding: 2%;
  margin-bottom: 2.5%;
  background-color: #008000;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_volume_plus:hover {
  background-color: #008000;
}

.menu li_volume_minus {
  margin-left: auto;
  margin-right: auto;
  width:41%;
  padding: 2.5%;
  margin-bottom: 1.5%;
  background-color: #8b0000;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_volume_minus:hover {
  background-color: #8b0000;
}

.menu li_volume_mute {
  margin-left: auto;
  margin-right: auto;
  width:15%;
  padding: 2%;
  margin-bottom: 1.5%;
  background-color: #000000;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_volume_mute:hover {
  background-color: #00000;
}

.menu li_space {
  margin-left: auto;
  margin-right: auto;
  width:100%;
  padding: 20px;
  margin-bottom: 7px;
  background-color: #d3d3d3;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_space:hover {
  background-color: #a9a9a9;
}

.menu li_keyboard_2_space {
  margin-left: auto;
  margin-right: auto;
  width:3.5%;
  padding: 2px;
  margin-bottom: 7px;
  background-color: #fffff0;
  color: #fffff0;
}

.menu li_keyboard_2_space:hover {
  background-color: #ffffff;
}

.menu li_keyboard_3_space {
  margin-left: auto;
  margin-right: auto;
  width:8%;
  padding: 2px;
  margin-bottom: 7px;
  background-color: #fffff0;
  color: #fffff0;
}

.menu li_keyboard_3_space:hover {
  background-color: #ffffff;
}

.menu li_keyboard_1 {
  margin-left: auto;
  margin-right: auto;
  width:8.7%;
  padding: 3%;
  margin-bottom: 4px;
  background-color: #d3d3d3;
  color: #000000;
  box-shadow: 0 5px 3px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.24);
}

.menu li_keyboard_1:hover {
  background-color: #a9a9a9;
}

.menu li_power_off:hover {
  background-color: #8b0000;
}

.menu li_power_off {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width:49%;
  padding: 3%;
  margin-bottom: 1%;
  background-color: #8b0000;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_power_on:hover {
  background-color: #008000;
}

.menu li_power_on {
  margin-left: auto;
  margin-right: auto;
  width:48%;
  padding: 3%;
  margin-bottom: 1%;
  background-color: #008000;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_home_button:hover {
  background-color: #ff1493;
}

.menu li_home_button {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width:49%;
  padding: 3%;
  margin-bottom: 1%;
  background-color: #ff1493;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_back_button:hover {
  background-color: #DB7093;
}

.menu li_back_button {
  margin-left: auto;
  margin-right: auto;
  width:48%;
  padding: 3%;
  margin-bottom: 1%;
  background-color: #DB7093;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_home {
  margin-left: auto;
  margin-right: auto;
  width:100%;
  padding: 12px;
  margin-bottom: 7px;
  background-color: #ff1493;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li_home:hover {
  background-color: #ff1493;
}

.menu li2:hover {
  background-color: #0099cc;
}

.menu li2 {
  margin-left: auto;
  margin-right: auto;
  width:32.5%;
  padding: 4%;
  margin-bottom: 1%;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li2_hidden:hover {
  background-color: #ffffff;
}

.menu li2_hidden {
  margin-left: auto;
  margin-right: auto;
  width:32.51%;
  padding: 0%;
  margin-bottom: 1%;
  background-color: #ffffff;
  color: #ffffff;
}


.menu li3:hover {
  background-color: #ff0000;
}

.menu li3 {
  margin-left: auto;
  margin-right: auto;
  width:32.51%;
  padding: 4%;
  margin-bottom: 1%;
  background-color: #ff0000;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="header">
  <h1 style="font-size:100%" align="center">ROKU Controller</h1>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li_power_on class="button" onclick="PowerOn()">Power On</li_power_on>
      <li_power_off class="button" onclick="PowerOff()">Power Off</li_power_off>
       <li_back_button class="button" onclick="Back()">Back</li_back_button>
      <li_home_button class="button" onclick="Home()">Home</li_home_button>


      <li2_hidden class="button"></li2_hidden>	
      <li2 style="font-weight:bold" class="button" onclick="Up()">^</li2>
      <li2_hidden class="button"></li2_hidden>     

      <li2 style="font-weight:bold" class="button" onclick="Left()"><</li2>
      <li3 class="button" onclick="Select()">Select</li3>
      <li2 style="font-weight:bold" class="button" onclick="Right()">></li2>

      <li2_hidden class="button"></li2_hidden>
      <li2 style="font-weight:bold" class="button" onclick="Down()">v</li2>
      <li2_hidden class="button"></li2_hidden>

      <li_volume_plus class="button" onclick="VolumeUp()">+</li_volume_plus>
      <li_volume_mute class="button" onclick="VolumeMute()">Mute</li_volume_mute>
      <li_volume_minus class="button" onclick="VolumeDown()">-</li_volume_minus>

	<li_keyboard_1 class="button" onclick="Q()">Q</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="W()">W</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="E()">E</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="R()">R</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="T()">T</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="Y()">Y</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="U()">U</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="I()">I</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="O()">O</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="P()">P</li_keyboard_1>

	<li_keyboard_2_space class="button"> </li_keyboard_2_space>

	<li_keyboard_1 class="button" onclick="A()">A</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="S()">S</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="D()">D</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="F()">F</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="G()">G</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="H()">H</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="J()">J</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="K()">K</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="L()">L</li_keyboard_1>

	<li_keyboard_2_space class="button"> </li_keyboard_2_space>

	<li_keyboard_3_space class="button"> </li_keyboard_3_space>

	<li_keyboard_1 class="button" onclick="Z()">Z</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="X()">X</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="C()">C</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="V()">V</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="B()">B</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="N()">N</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="M()">M</li_keyboard_1>
	<li_keyboard_1 class="button" onclick="Backspace()"><<</li_keyboard_1>

	<li_keyboard_3_space class="button"> </li_keyboard_3_space>

	<li_space class="button" onclick="Space()"> </li_space>

    </ul>
  </div>

<script type="text/javascript">
	/* */
	function Select(e) {
		var Url = "http://192.168.0.13:8060/keypress/Select";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Left(e) {
		var Url = "http://192.168.0.13:8060/keypress/left";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Right(e) {
		var Url = "http://192.168.0.13:8060/keypress/right";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Up(e) {
		var Url = "http://192.168.0.13:8060/keypress/up";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
		console.log(xhr.status);
	}
	function Down(e) {
		var Url = "http://192.168.0.13:8060/keypress/down";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Home(e) {
		var Url = "http://192.168.0.13:8060/keypress/Home";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function PowerOn(e) {
		var Url = "http://192.168.0.13:8060/keypress/PowerOn";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function PowerOff(e) {
		var Url = "http://192.168.0.13:8060/keypress/PowerOff";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Q(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_q";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function W(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_w";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function E(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_e";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function R(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_r";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function T(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_t";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Y(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_y";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function U(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_u";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function I(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_i";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function O(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_o";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function P(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_p";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function A(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_a";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function S(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_s";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function D(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_d";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function F(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_f";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function G(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_g";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function H(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_h";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function J(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_j";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function K(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_k";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function L(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_l";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Z(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_z";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function X(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_x";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function C(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_c";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function V(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_v";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function B(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_b";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function N(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_n";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function M(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_m";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Backspace(e) {
		var Url = "http://192.168.0.13:8060/keypress/Backspace";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Space(e) {
		var Url = "http://192.168.0.13:8060/keypress/Lit_%20";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function VolumeUp(e) {
		var Url = "http://192.168.0.13:8060/keypress/VolumeUp";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function VolumeDown(e) {
		var Url = "http://192.168.0.13:8060/keypress/VolumeDown";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function VolumeMute(e) {
		var Url = "http://192.168.0.13:8060/keypress/VolumeMute";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
	function Back(e) {
		var Url = "http://192.168.0.13:8060/keypress/Back";
		var xhr = new XMLHttpRequest();
		xhr.open('POST', Url, true);
		xhr.send();
	}
</script>

<style>
.button {
	  background-color: #4CAF50; /* Green */
	  border: none;
	  color: white;
	  padding: 40px 50px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
}



<div class="footer">
  <p>Resize the browser window to see how the content respond to the resizing.</p>
</div>

</body>
</html>
