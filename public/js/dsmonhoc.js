apiMonHoc = "http://localhost/tinchi/Loaddsmondk/LoadResult";
var hocphan = 0;
var sum = 0;
function loadMonHoc() {
fetch(apiMonHoc)
   .then(function (response) {
      return response.json();
   })
   .then(function (items) {
      var htmls = "";

      items.forEach((element, index) => {
         htmls += 
         `<tr class='Result__Contain-lsdk-tr'>
          <td class='container__content-thead-title'>${index + 1} </td>
          <td class='container__content-thead-title'>${element.MaLHP}</td>
          <td class='container__content-thead-title'>${element.TenHP}</td>
          <td class='container__content-thead-title'>${element.STC}</td>
          <td class='container__content-thead-title'>${element.slHP}</td>
          <td class='container__content-thead-title container__content-thead-title-regis'><a class ='regist-button' href='DanhSachLopHPDangKy&MaLHP=${element.MaLHP}'>[Đăng Ký]</a></td>
        </tr>`;
        
         hocphan+=1;
         sum+= Number(element.STC);

      });
      document.querySelector(".Result__Contain-lsdk-subject").innerHTML = htmls;
      document.querySelector(".count-hocphan").innerHTML = hocphan;
      document.querySelector(".sum-tinchi").innerHTML = sum;
   });
  }
  loadMonHoc();

  




  