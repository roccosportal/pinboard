$.fn.tagcloud.defaults = {
  size: {start: 14, end: 18, unit: 'pt'},
  color: {start: '#cde', end: '#005580'}
};

$(function () {
  $('#tagcloud a').tagcloud();
});