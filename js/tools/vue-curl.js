new Vue({
  el: "#app",
  data: {
      urls: '',
      o: '',
      c: '',
      l: '',
      sS: ''
  },
  methods: {
      opt: function(oldVal, e) {
          var re = new RegExp(e.target.pattern);
          var result = re.exec(e.target.value);

          return e.target.value = (result) ? result[0] : oldVal;
      }
  }
})

function copyToClipboard(element) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();
alert('コピーに成功しました');
}