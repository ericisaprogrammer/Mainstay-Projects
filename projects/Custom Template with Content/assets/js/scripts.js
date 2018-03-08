const mainNav = document.querySelector("#head-nav");
    const sizeOfNav = mainNav.offsetHeight;
    const floatingNav = document.querySelector("#head-floating-nav");

    /*
    // Code for auto-changing background courtesy of CrocoDillon on css-tricks.com
    const synopsis = document.querySelector("#sec-synopsis");
    var current = 0;
    var backgrounds = new Array(
      //'url("wp-content/themes/twentyseventeen/assets/images/syn-background1.jpg")',
      'url("wp-content/themes/twentyseventeen/assets/images/syn-background2.jpg")'//,
      //'url("wp-content/themes/twentyseventeen/assets/images/syn-background3.jpg")'
    );
    
    function nextBackground() {
      synopsis.style.background = backgrounds[current = ++current % backgrounds.length];
      synopsis.style.backgroundSize = "cover";
      //setTimeout(nextBackground, 5000);
    }
    // End code from CrocoDillon
    */
    function fixNav() {
      if(window.scrollY <= sizeOfNav) {
        mainNav.style.position = "fixed";
        mainNav.style.transition = "all .2s";
        floatingNav.style.top = (sizeOfNav + 10) + 'px';
        document.querySelector("#head-header").style.height = "40px";
      } else {
        mainNav.style.position = "relative";
        mainNav.style.transition = "all .2s";
        floatingNav.style.top = 10 + "px";
      }
    }
    fixNav()

    window.addEventListener('scroll', fixNav);

    //Hover over hero icons code--------------------------------------+++
    var heroes = document.getElementsByClassName("hero-information");
    var heroIcons = document.getElementsByClassName("hero-icon");

    for(var i = 0; i < heroes.length; i++) {
      var icon = heroIcons.item(i);
      heroName = heroes.item(i).dataset.hero;
      console.log(heroName);
      icon.addEventListener('mouseover', hoverOverHero(heroName));
    }

    function hoverOverHero(heroName) {
      return function() {
        for(var i = 0; i < heroes.length; i++) {
          heroes.item(i).classList.add("hidden");
          heroIcons.item(i).classList.remove("hero-selected");
        }

        var thisIcon = document.getElementById("hero-icon-" + heroName);
        var thisHero = document.getElementById("hero-information-" + heroName);

        thisIcon.classList.add('hero-selected');
        thisHero.classList.remove("hidden");
      }
    }

    function pushUnder() {
      var below = document.getElementsByClassName("under");
      for(var i = 0; i < below.length; i++) {
        var element = below[i];
        var databind = element.dataset.under;
        if(!databind)
          break;
        var padding = databind.substring(0, databind.indexOf(" "));
        var elementAbove = databind.substring(databind.indexOf(" ") + 1);
        var rectElementAbove = document.getElementById(elementAbove).getBoundingClientRect();
        var rectElement = element.getBoundingClientRect();

        element.style.height = (Math.abs(rectElement.top - rectElementAbove.bottom) + Number(padding)) + "px";
      }
    }

    window.scrollTo(0,0);
    pushUnder();
    //synopsis.style.background = backgrounds[0];
    //synopsis.style.backgroundSize = "cover";
    //setTimeout(nextBackground, 5000);