$(document).ready(function () {
  let url = window.location.pathname;
  // apiLopHoc = `http://localhost/tinchi/Loadlopdk/loadResult&MaLHP=${url}`;
  function loadLopHoc() {
    $.post(`./Loadlopdk/loadResult&MaLHP=${url}`, function (data) {
      let obj = JSON.parse(data);
      let result = "";
      url = url.split("MaLich=");
      let maLich = url;
      console.log(obj);

      obj.forEach((element) => {
        result += `<tr class='Result__Contain-lsdk-tr'>`;
        if (element.maLich != maLich[1]) {
          result += `<td style='cursor: grab' class='container__content-thead-title container__content-thead-title-regis container__content-thead-title-regis--ID button-regist' data-id=` + element.ID + ` data-ml=` + element.maLich + ` data-lhp=` + element.MaLHP + `><a>[Đăng Ký]</a></td>`;
        } else {
          result += `<td class="container__content-thead-title container__content-thead-title-regis">
            <a style="color: red; cursor: default">[Hiện tại]</a>
          </td>`;
        }
        result += `
            <td class='container__content-thead-title container__content-thead-title--MaLHP' >${element.MaLHP}</td>
            <td class='container__content-thead-title container__content-thead-title--gioihan'>${element.gioiHan}</td>
            <td class='container__content-thead-title container__content-thead-title--dangky'>${element.dangKy}</td>
            <td class='container__content-thead-title container__content-thead-title--TenGV'>${element.TenGV}</td>
            <td class='container__content-thead-title container__content-thead-title--thoigianhoc'>${element.thoigianhoc}</td>
            <td hidden class='container__content-thead-title--maLich' ></td>
        </tr>`;
      });
      $(".Result__Contain-lsdk-class").html(result);

      // document.querySelector(".Result__Contain-lsdk-class").innerHTML = htmls;
      $(".button-regist").click(function () {
        let MaLHP = $(this).attr("data-lhp");
        let maLich = $(this).attr("data-ml");
        let ID = $(this).attr("data-id");
        $.post("./dangky/registerMH", { MaLHP: MaLHP, maLich: maLich, ID: ID }, function (data1) {
          if (data1 == 0) {
            alert("Đăng ký thành công");
          } else {
            alert("Đăng ký thất bại");
          }
        });
      });
    });
  }
  loadLopHoc();
});
