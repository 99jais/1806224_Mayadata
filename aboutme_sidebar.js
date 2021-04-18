function testIn() {
    console.log("hi");
    document.getElementById("mySidebar1").style.display = "none";
    document.getElementById("mySidebar").style.display = "block";

    document.getElementById("paper").style.marginLeft = "300px";
  }
  
  function testOut() {
    console.log("hovering outside sidebar");
    document.getElementById("mySidebar1").style.display = "block";
    document.getElementById("mySidebar").style.display = "none";

    document.getElementById("paper").style.marginLeft = "125px";
  }
