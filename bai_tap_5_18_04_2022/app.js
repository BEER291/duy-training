const api_url = "https://thongtindoanhnghiep.co/api/city";
async function getapi(url) {
  const response = await fetch(url);
  var datatinh = await response.json();
  show(datatinh);
}
getapi(api_url);
function show(datatinh) {
  var str = "<option>Tỉnh thành</option>";
  for (i = 0; i < datatinh.LtsItem.length; i++) {
    var tinh = datatinh.LtsItem[i];
    str += `
    <option value="${tinh.ID}">
    ${tinh.Title}
    </option>`;
  }
  $("#tinh").append(str);
}
$(document).ready(function () {
  $("#tinh").change(function () {
    $("#quanhuyen").empty();
    $("#phuongxa").empty();
    var tinhid = $("#tinh").val();
    const api_url =
      "https://thongtindoanhnghiep.co/api/city/" + tinhid + "/district";
    async function getapi(url) {
      const response = await fetch(url);
      var dataquanhuyen = await response.json();
      show(dataquanhuyen);
    }
    getapi(api_url);
    function show(dataquanhuyen) {
      var str = "<option>Quận/Huyện</option>";
      for (i = 0; i < dataquanhuyen.length; i++) {
        var quanhuyen = dataquanhuyen[i];
        str += `
        <option value="${quanhuyen.ID}">
        ${quanhuyen.Title}
        </option>`;
      }
      $("#quanhuyen").append(str);
    }
  });
});
$(document).ready(function () {
  $("#quanhuyen").change(function () {
    var quanhuyenid = $("#quanhuyen").val();
    const api_url =
      "https://thongtindoanhnghiep.co/api/district/" + quanhuyenid + "/ward";
    async function getapi(url) {
      const response = await fetch(url);
      var dataphuongxa = await response.json();
      show(dataphuongxa);
    }
    getapi(api_url);
    function show(dataphuongxa) {
      var str = "<option>Phường/Xã</option>";
      for (i = 0; i < dataphuongxa.length; i++) {
        var phuongxa = dataphuongxa[i];
        str += `
        <option value="${phuongxa.ID}">
        ${phuongxa.Title}
        </option>`;
      }
      $("#phuongxa").append(str);
    }
  });
});
