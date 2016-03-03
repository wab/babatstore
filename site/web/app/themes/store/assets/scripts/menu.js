(function() {
	[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
		var menuItems = menu.querySelectorAll('.menu__link'),
			setCurrent = function(ev) {
				ev.preventDefault();
				var item = ev.target.parentNode; // li
				// return if already current
				if (classie.has(item, 'menu__item--current')) {
					return false;
				}
				// remove current
				classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
				// set current
				classie.add(item, 'menu__item--current');
			};
		[].slice.call(menuItems).forEach(function(el) {
			el.addEventListener('click', setCurrent);
		});
	});
	[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
		link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
		new Clipboard(link);
		link.addEventListener('click', function() {
			classie.add(link, 'link-copy--animate');
			setTimeout(function() {
				classie.remove(link, 'link-copy--animate');
			}, 300);
		});
	});
})(window);

(function() {
	'use strict';
	/*global ScrollMagic:true*/
	/*eslint no-undef: 2*/
	/*eslint no-unused-vars: 2*/
	var controller = new ScrollMagic.Controller();
	var menu = new ScrollMagic.Scene({
		triggerElement: '#trigger',
		triggerHook: 'onLeave'
	})
	.setClassToggle('.menu', 'fix');

	// Add Scene to ScrollMagic Controller
	controller.addScene(menu);

})();

