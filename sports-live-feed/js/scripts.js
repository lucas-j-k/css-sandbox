var elementRefs = {
    allFeeds: document.querySelectorAll('.mobile-feed'),
    allFeedTabs: document.querySelectorAll('.feed-tabs__tab'),
    feedTabList: document.querySelector('#feed-tabs'),
    mainNav: document.querySelector('#main-nav'),
    menuToggle: document.querySelector('#menu-toggle'),
    menuIcon: document.querySelector('#menu-toggle-icon')
}

var globalVars = {
    initialWidth: window.innerWidth,
    breakpointMd: 728,
    breakpointLg: 1024,
    menuOpenClass: "im im-menu",
    menuCloseClass: "im im-x-mark"
}

var utilities = {
    handleMenuClick: function(){
        if(elementRefs.mainNav.style.display === "block"){
            utilities.setMenuVisibility(false);
        } else {
            utilities.setMenuVisibility(true);
        }
    },
    setMenuVisibility: function(state){
        var displayValue = state ? "block" : "none";
        var iconClass = state ? globalVars.menuCloseClass : globalVars.menuOpenClass;
        elementRefs.mainNav.style.display = displayValue;
        elementRefs.menuIcon.className = iconClass;
    }
}

var feedMethods = {
    hideInitialFeeds: function(){
        for(var i = 1; i < elementRefs.allFeeds.length; i++){
            var currentFeed = elementRefs.allFeeds[i];
            currentFeed.style.display = "none";
        }
    },
    toggleFeed(e){
        if(e.target.tagName !== "LI"){ return }
        var tabElement = e.target;
        for(var i = 0; i < elementRefs.allFeedTabs.length; i++){
            elementRefs.allFeedTabs[i].classList.remove('active');
        }
        tabElement.classList.toggle("active");
        var feedRef = tabElement.dataset.feed;
        for(var i = 0; i < elementRefs.allFeeds.length; i++){
            var currentFeed = elementRefs.allFeeds[i];
            if(currentFeed.dataset.feed === feedRef){
                currentFeed.style.display = "block";

            } else {
                currentFeed.style.display = "none"
            }
        }
    }
}


//==============
//Main flow
//==============

elementRefs.feedTabList.addEventListener('click', function(e){ feedMethods.toggleFeed(e) });
elementRefs.menuToggle.addEventListener('click', utilities.handleMenuClick);

if(globalVars.initialWidth < globalVars.breakpointLg){
    utilities.setMenuVisibility(false);  
    feedMethods.hideInitialFeeds();
}
