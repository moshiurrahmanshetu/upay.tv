(function(){
	var moreToggle=document.getElementById('moreToggle');
	var moreMenu=document.getElementById('moreMenu');
	if (moreToggle && moreMenu) {
    // Ensure menu is hidden at start
    moreMenu.style.display = 'none';
	moreMenu.style.maxHeight = "0";
	moreMenu.style.opacity = "0";
	moreMenu.style.overflow = "hidden";

    moreToggle.addEventListener('click', function() {
      const isHidden = moreMenu.style.display === 'none' || moreMenu.classList.contains('d-none');
	//   const isHidden = moreMenu.style.maxHeight === "0px" || !moreMenu.style.maxHeight;

      if (isHidden) {
        moreMenu.classList.remove('d-none');
        moreMenu.style.display = 'block';
		moreMenu.style.maxHeight = moreMenu.scrollHeight + "px";
  		moreMenu.style.opacity = "1";
		moreMenu.offsetHeight;
      } else {
        // moreMenu.style.display = 'none';
        // moreMenu.classList.add('d-none');
		moreMenu.style.maxHeight = "0";
  		moreMenu.style.opacity = "0";
		setTimeout(() => {
      if (moreMenu.style.maxHeight === "0px") {
        moreMenu.style.display = "none";
      }
    }, 300);
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

