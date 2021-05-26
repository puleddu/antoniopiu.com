/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'puleddu\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-layout' : '&#x57;&#x6f;&#x72;&#x6b;&#x73;',
			'icon-arrow-left' : '&#x50;&#x72;&#x65;&#x76;&#x69;&#x6f;&#x75;&#x73;',
			'icon-untitled' : '&#x4e;&#x65;&#x78;&#x74;',
			'icon-github' : '&#x47;&#x69;&#x74;&#x48;&#x75;&#x62;',
			'icon-twitter' : '&#x54;&#x77;&#x69;&#x74;&#x74;&#x65;&#x72;',
			'icon-dribbble' : '&#x44;&#x72;&#x69;&#x62;&#x62;&#x62;&#x6c;&#x65;',
			'icon-linkedin' : '&#x4c;&#x69;&#x6e;&#x6b;&#x65;&#x64;&#x49;&#x6e;',
			'icon-flow-branch' : '&#x43;&#x6f;&#x64;&#x65;',
			'icon-unlink' : '&#x45;&#x72;&#x72;&#x6f;&#x72;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};