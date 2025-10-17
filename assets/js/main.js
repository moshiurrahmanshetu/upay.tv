(function(){
	var moreToggle=document.getElementById('moreToggle');
	var moreMenu=document.getElementById('moreMenu');
	if(moreToggle && moreMenu){
		moreToggle.addEventListener('click',function(){
			if(moreMenu.classList.contains('d-none')){
				moreMenu.classList.remove('d-none');
			}else{
				moreMenu.classList.add('d-none');
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

