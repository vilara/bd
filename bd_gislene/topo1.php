<script>
startList = function() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
  }
  node.onmouseout=function() {
  this.className=this.className.replace
	(" over", "");
   }
   }
  }
 }
}
window.onload=startList;
</script>

<style>
 	margin: 0;
	padding: 0;
	list-style: none;
	width: 150px; /* Width of Menu Items */
	border-bottom: 1px solid #ccc;
	}

ul li {
	position: relative;
	}

li ul {
	position: absolute;
	left: 149px; /* Set 1px less than menu width */
	top: 0;
	display: none;
	}

/* Styles for Menu Items */
ul li a {
	display: block;
	text-decoration: none;
	color: #777;
	background: #fff; /* IE6 Bug */
	padding: 5px;
	border: 1px solid #ccc;
	border-bottom: 0;
	}

/* Fix IE. Hide from IE Mac \*/
* html ul li { float: left; height: 1%; }
* html ul li a { height: 1%; }
/* End */

ul li a:hover { color: #E2144A; background: #f9f9f9; } /* Hover Styles */

li ul li a { padding: 2px 5px; } /* Sub Menu Styles */

li:hover ul, li.over ul { display: block; } /* The magic */
</style>



<ul id="nav">
  <li><a href="#">Home</a></li>
  <li><a href="#">About</a>
    <ul>
      <li><a href="#">History</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Offices</a></li>
    </ul>
  </li>
  <li><a href="#">Services</a>
    <ul>
      <li><a href="#">Web Design</a></li>
      <li><a href="#">Internet Marketing</a></li>
      <li><a href="#">Hosting</a></li>
      <li><a href="#">Domain Names</a></li>
      <li><a href="#">Broadband</a></li>
    </ul>
  </li>
  <li><a href="#">Contact Us</a>
    <ul>
      <li><a href="#">United Kingdom</a></li>
      <li><a href="#">France</a></li>
      <li><a href="#">USA</a></li>
      <li><a href="#">Australia</a></li>
    </ul>
  </li>


</ul>


