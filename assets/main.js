(function(){
	var moreToggle = document.getElementById('moreToggle');
  var moreMenu = document.getElementById('moreMenu');

  if (moreToggle && moreMenu) {
    // initial state
    moreMenu.style.display = 'none';
    moreMenu.style.maxHeight = "0";
    moreMenu.style.opacity = "0";
    moreMenu.style.overflow = "hidden";
    moreMenu.style.transition = "max-height 0.3s ease, opacity 0.3s ease";

    // toggle button click
    moreToggle.addEventListener('click', function(event) {
      event.stopPropagation(); // prevent bubbling to document
      var isHidden = moreMenu.style.display === 'none' || moreMenu.classList.contains('d-none');

      if (isHidden) {
        moreMenu.classList.remove('d-none');
        moreMenu.style.display = 'block';

        // force reflow so transition always runs reliably
        /* eslint-disable no-unused-expressions */
        moreMenu.offsetHeight;
        /* eslint-enable no-unused-expressions */

        moreMenu.style.maxHeight = moreMenu.scrollHeight + "px";
        moreMenu.style.opacity = "1";
      } else {
        // close with transition
        moreMenu.style.maxHeight = "0";
        moreMenu.style.opacity = "0";
        setTimeout(function() {
          // hide after transition
          if (moreMenu.style.maxHeight === "0px" || moreMenu.style.maxHeight === "0") {
            moreMenu.style.display = "none";
            moreMenu.classList.add('d-none');
          }
        }, 320); // small buffer (match CSS duration)
      }
    });

    // prevent clicks inside menu from closing it
    moreMenu.addEventListener('click', function(event){
      event.stopPropagation();
    });

    // close when clicking anywhere outside
    document.addEventListener('click', function(event){
      // if menu is open and click target is outside both toggle and menu -> close
      var menuOpen = moreMenu.style.display !== 'none' && moreMenu.style.maxHeight !== '0' && moreMenu.style.opacity === '1';
      if (menuOpen && !moreMenu.contains(event.target) && !moreToggle.contains(event.target)) {
        moreMenu.style.maxHeight = "0";
        moreMenu.style.opacity = "0";
        setTimeout(function() {
          if (moreMenu.style.maxHeight === "0px" || moreMenu.style.maxHeight === "0") {
            moreMenu.style.display = "none";
            moreMenu.classList.add('d-none');
          }
        }, 320);
      }
    });

    // optional: close on resize or orientation change
    window.addEventListener('resize', function(){
      if (moreMenu.style.display !== 'none') {
        moreMenu.style.maxHeight = "0";
        moreMenu.style.opacity = "0";
        setTimeout(function() {
          moreMenu.style.display = 'none';
          moreMenu.classList.add('d-none');
        }, 320);
      }
    });

    // optional: close on ESC key
    document.addEventListener('keydown', function(e){
      if (e.key === 'Escape' && moreMenu.style.display !== 'none') {
        moreMenu.style.maxHeight = "0";
        moreMenu.style.opacity = "0";
        setTimeout(function() {
          moreMenu.style.display = 'none';
          moreMenu.classList.add('d-none');
        }, 320);
      }
    });
  }
	var createAdTriggers=document.querySelectorAll('[data-create-ad]');
	if(createAdTriggers.length){
		createAdTriggers.forEach(function(el){
			el.addEventListener('click',function(){
				var modal=new bootstrap.Modal(document.getElementById('createAdModal'));
				modal.show();
			});
		});
	}
})();

