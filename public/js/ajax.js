$(document).ready(function () {
  loadResult();
  loadNamHoc();
  loadHocKy();
  loadHPChuaTichLuy();
  loadResultLSDKHP();
  loadNamHocLSDKHP();
  loadHocKyLSDKHP();
  loadSearch();

  $(".year-contain").change(function () {
    if ($(this).val() == 0) {
      loadHocKy();
      $(".semester-contain").val(0);

      if (document.querySelector(".option-semester")) document.querySelector(".option-semester").style.display = "none";
    } else {
      if (document.querySelector(".option-semester")) document.querySelector(".option-semester").style.display = "flex";
    }
    loadResult();

  });

  $(".semester-contain").change(function () {
    loadResult();

  });

  $(".container__content-item-semester").change(function () {
    loadResultLSDKHP();
  });

  $(".container__content-item-year").change(function () {
    if ($(this).val() == 0) {
      $(".container__content-item-semester").val(0);
    }
    loadResultLSDKHP();
  });

  $(".container__content-cancel").click(function () {
    loadHPBiHuy();
  });
  $(".container__content-regis").click(function () {
    loadHPDK();
  });

  $(".option--past").click(function () {
    let diem10 = $(this).attr("data-value");
    loadResult(diem10);
  });

  $(".option--fail").click(function () {
    let diem10 = $(this).attr("data-value");
    loadResult(diem10);
  });

  var inputSearch = document.querySelector(".keywords");
  var btnSearch = document.querySelector(".search__btn");
  inputSearch.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
      event.preventDefault();
      btnSearch.click();
    }
  });
  $(".search__Option-item").change(loadSearch());

  // $(".search__btn").click(function () {
  //   loadTraCuu();
  // });

  function loadSearch() {
    $(".search__btn").click(function () {
      if ($(".search__Option-item").val() == "MaHP") {
        loadTraCuuMaHP();
      } else if ($(".search__Option-item").val() == "TenHP") {
        loadTraCuuTenHP();
      } else if ($(".search__Option-item").val() == "TenKhoa") {
        loadTraCuuTenKhoa();
      } else if ($(".search__Option-item").val() == "TenGiangVien") {
        loadTraCuuTenGiangVien();
      }
    });
  }

  function loadTraCuuMaHP() {
    let keywords = $(".keywords").val();
    $.post("./search/loadResultMaHP", { keywords: keywords }, function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          element.MaHP +
          "</td>" +
          "<td>" +
          element.MaLHP +
          "</td>" +
          "<td>" +
          element.TenHP +
          "</td>" +
          "<td>" +
          element.STc +
          "</td>" +
          "<td>" +
          element.Loai +
          "</td>" +
          "<td>" +
          element.ThongTin +
          "</td>" +
          "<td>" +
          element.GiangVien +
          "</td>" +
          "<td>" +
          element.GioiHan +
          "</td>" +
          "<td>" +
          element.TuNgay +
          "</td>" +
          "<td>" +
          element.DenNgay +
          "</td>" +
          "</tr>";
      });

      $(".search__details").html(result);
    });
  }

  function loadTraCuuTenHP() {
    let keywords = $(".keywords").val();
    $.post("./search/loadResultTenHP", { keywords: keywords }, function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          element.MaHP +
          "</td>" +
          "<td>" +
          element.MaLHP +
          "</td>" +
          "<td>" +
          element.TenHP +
          "</td>" +
          "<td>" +
          element.STc +
          "</td>" +
          "<td>" +
          element.Loai +
          "</td>" +
          "<td>" +
          element.ThongTin +
          "</td>" +
          "<td>" +
          element.GiangVien +
          "</td>" +
          "<td>" +
          element.GioiHan +
          "</td>" +
          "<td>" +
          element.TuNgay +
          "</td>" +
          "<td>" +
          element.DenNgay +
          "</td>" +
          "</tr>";
      });

      $(".search__details").html(result);
    });
  }

  function loadTraCuuTenKhoa() {
    let keywords = $(".keywords").val();
    $.post("./search/loadResultTenKhoa", { keywords: keywords }, function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          element.MaHP +
          "</td>" +
          "<td>" +
          element.MaLHP +
          "</td>" +
          "<td>" +
          element.TenHP +
          "</td>" +
          "<td>" +
          element.STc +
          "</td>" +
          "<td>" +
          element.Loai +
          "</td>" +
          "<td>" +
          element.ThongTin +
          "</td>" +
          "<td>" +
          element.GiangVien +
          "</td>" +
          "<td>" +
          element.GioiHan +
          "</td>" +
          "<td>" +
          element.TuNgay +
          "</td>" +
          "<td>" +
          element.DenNgay +
          "</td>" +
          "</tr>";
      });

      $(".search__details").html(result);
    });
  }

  function loadTraCuuTenGiangVien() {
    let keywords = $(".keywords").val();
    $.post("./search/loadResultTenGiangVien", { keywords: keywords }, function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          element.MaHP +
          "</td>" +
          "<td>" +
          element.MaLHP +
          "</td>" +
          "<td>" +
          element.TenHP +
          "</td>" +
          "<td>" +
          element.STc +
          "</td>" +
          "<td>" +
          element.Loai +
          "</td>" +
          "<td>" +
          element.ThongTin +
          "</td>" +
          "<td>" +
          element.GiangVien +
          "</td>" +
          "<td>" +
          element.GioiHan +
          "</td>" +
          "<td>" +
          element.TuNgay +
          "</td>" +
          "<td>" +
          element.DenNgay +
          "</td>" +
          "</tr>";
      });

      $(".search__details").html(result);
    });
  }

  var arrResult = new Array();
  var arrYear = new Array();
  var arrRL = new Array();

  function loadResult(diem10 = null) {
    arrResult = new Array();
    arrYear = new Array();
    arrRL = new Array();
    let namHocChanged = $(".year-contain").val();
    let hocKyChanged = $(".semester-contain").val();
    let result = "";
    let totalResult = 0;
    let totalFail = 0;

    $.post("./KetQua/loadPoint", { namHocChanged: namHocChanged, hocKyChanged: hocKyChanged, diem10: diem10 }, function (data) {
      let obj = JSON.parse(data);
      let sumDTBTL10 = 0;
      let sumDTBTL4 = 0;
      let sumTCTL = 0;
      let sumTCTLKD = 0;

      obj.forEach((element) => {
        let namHoc = element.namBD;
        let hocKy = element.hocky;
        let sumTC = 0;
        let sumDTB10 = 0;
        let sumDTB4 = 0;
        let sumTCKD = 0;
        let diemRL = 0;
        let xepLoai = "";
        arrYear.push(element);

        namHoc = namHocChanged != null && namHocChanged != 0 ? namHocChanged : namHoc;
        hocKy = hocKyChanged != null && hocKyChanged != 0 ? hocKyChanged : hocKy;

        $.post("./KetQua/loadResult", { namHoc: namHoc, hocKy: hocKy, diem10: diem10 }, function (dataResult) {
          result += "<div>" + "<tr class='row-Top--Color'>" + "<td style='text-align: left; font-weight: 600; font-size: 15px' colspan=9 class='row-Top'>Năm học: " + element.namBD + "-" + element.namKT + " Học kỳ: " + element.hocky + "</td>" + "</tr>";

          let objResult = JSON.parse(dataResult);

          for (let i = 0; i < objResult.length - 1; i++) {
            arrResult.push(objResult[i]);

            sumTC += Number(objResult[i].TinChi);
            sumDTB10 += objResult[i].Diem10 * objResult[i].TinChi;
            sumDTB4 += objResult[i].Diem4 * objResult[i].TinChi;
            sumTCTL += Number(objResult[i].TinChi);
            sumDTBTL10 += objResult[i].Diem10 * objResult[i].TinChi;
            sumDTBTL4 += objResult[i].Diem4 * objResult[i].TinChi;
            diemRL = objResult[objResult.length - 1].diemSo;
            xepLoai = objResult[objResult.length - 1].diemChu;
            totalResult++;

            result +=
              "<tr>" +
              "<td>" +
              objResult[i].ID +
              "</td>" +
              "<td>" +
              objResult[i].MaHocPhan +
              "</td>" +
              "<td>" +
              objResult[i].TenHP +
              "</td>" +
              "<td>" +
              objResult[i].TinChi +
              "</td>" +
              "<td>" +
              objResult[i].Diem10 +
              "</td>" +
              "<td>" +
              objResult[i].Diem4 +
              "</td>" +
              "<td>" +
              objResult[i].DiemChu +
              "</td>";

            if (objResult[i].Diem10 < 4) {
              sumTCKD += Number(objResult[i].TinChi);
              sumTCTLKD += Number(objResult[i].TinChi);
              totalFail++;

              result += "<td><i class='fa-solid fa-xmark dot--result dot--fail'></i></td>";
            } else {
              result += "<td><i class='fa-solid fa-check dot--result dot--past'></i></td>";
            }

            result += "<td><i class='fa-solid fa-circle-info detail-result' data-id='" + objResult[i].ID + "'></i>" + "</tr>";
          }

          arrRL.push(diemRL);
          arrRL.push(xepLoai);

          sumTCKD = sumTCKD < 0 ? 0 : sumTCKD;
          sumTCTLKD = sumTCTLKD < 0 ? 0 : sumTCTLKD;

          result +=
            "<tr class='Row-Bottom'>" +
            "<td style='text-align: left' colspan='4'>" +
            "<p class='totalTCHK'>- Tổng số tín chỉ: " +
            sumTC +
            " </p>" +
            "<p class='totalTCDHK'>- Số tín chỉ đạt: " +
            (sumTC - sumTCKD) +
            " <span class='totalTCKDHK'> Số tín chỉ không đạt: " +
            Number(sumTCKD) +
            "</span></p>" +
            "<p clas='totalDTBHK10'>- Điểm trung bình học kỳ (Hệ 10): " +
            (sumDTB10 / sumTC).toFixed(2) +
            "</p>" +
            "<p clas='totalDTBHK4'>- Điểm trung bình học kỳ (Hệ 4): " +
            (sumDTB4 / sumTC).toFixed(2) +
            " - <span class='diemRL'> Điểm rèn luyện: " +
            diemRL +
            " - Xếp loại (RL): " +
            xepLoai +
            " </span></p>" +
            "</td>" +
            "<td style='text-align: left' colspan='5'>" +
            "<p>- Số tín chỉ tích lũy: " +
            (sumTCTL - sumTCTLKD) +
            "</p>" +
            "<p>- Điểm trung bình tích lũy (Hệ 10): " +
            (sumDTBTL10 / sumTCTL).toFixed(2) +
            "</p>" +
            "<p>- Điểm trung bình tích lũy (Hệ 4): " +
            (sumDTBTL4 / sumTCTL).toFixed(2) +
            "</p>" +
            "</td>" +
            "</tr>" +
            "</div>";
          $(".Result__Contain").html(result);
          $(".total--past").html(totalResult - totalFail);
          $(".total--fail").html(totalFail);

          $(".detail-result").click(function () {
            let ID = $(this).attr("data-id");

            $.post("./KetQua/loadDetail", { ID: ID }, function (data) {
              let objDetail = JSON.parse(data);
              let result = "";
              let nameDetail = "";

              objDetail.forEach((element) => {
                nameDetail = element.TenHP;

                result += "<tr>" + "<td>" + "<p>" + element.ID + "</p>" + "</td>" + "<td>" + "<p>" + element.diemCC + "</p>" + "</td>" + "<td>" + "<p>" + element.diemGK + "</p>" + "</td>" + "<td>" + "<p>" + element.diemCK + "</p>" + "</td>" + "</tr>";
              });

              $(".name-detail").html(nameDetail);
              $(".detail-point__contain").html(result);

              $(".detail-result-point").fadeIn(300);
            });
          });
        });
      });
      $(".Result__Contain").html(result);
    });
  }

  $(".close-detail").click(function () {
    $(".detail-result-point").fadeOut(700);
  });

  function loadResultLSDKHP() {
    let namHocChanged = $(".container__content-item-year").val();
    let hocKyChanged = $(".container__content-item-semester").val();
    $.post(
      "./LichSuDKHP/loadResult",
      { namHocChanged: namHocChanged, hocKyChanged: hocKyChanged },
      function (data) {
        let obj = JSON.parse(data);
        let result = "";

        obj.forEach((element) => {
          let namHoc = element.namBD;
          let hocKy = element.hocky;
          let status = element.status;
          namHoc =
            namHocChanged != null && namHocChanged != 0
              ? namHocChanged
              : namHoc;
          hocKy =
            hocKyChanged != null && hocKyChanged != 0 ? hocKyChanged : hocKy;
          if (obj.length > 0) {
            if (status == 0) {
              result +=
                "<tr class='container__content-details container__content-details--cancel'>";
            } else {
              result += "<tr class='container__content-details'>";
            }
            result +=
              "<td class='container__content-details-item'>" +
              element.ThaoTac +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.MaLopHP +
              "</td>" +
              "<td class='container__content-details-item container__content-details-subject'>" +
              element.TenHP +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.MaTK +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.VaoNgay +
              "</td>" +
              "<td class='container__content-details-item'>" +
              "<i class='fa-solid fa-circle-info detail-icon' data-id='"+element.MaLopHP+"'></i>" +
              "</td>" +
              "</tr>";
              
          } else {
            result += "";
          }
        });
        $(".Result__Contain-lsdk").html(result);

        $(".detail-icon").click(function () {
          document.querySelector(".modal").style.display = "flex";
          let result1 = "";
          let stt=1;
          let ID = $(this).attr("data-id");
          let MaNH = $(".container__content-item-year").find(":selected").attr("data-manh");
          let MaHK = $('.container__content-item-semester').find(":selected").attr("data-mahk");
          $.post(
            "./LichSuDKHP/loadDSSV",
            {MaHP:ID, MaHK: MaHK, MaNH: MaNH },
            function (data1) {
              let objDSSV = JSON.parse(data1);
              objDSSV.forEach((element1) => {
              result1 += "<tr class='container__content-detail'>"+
              "<td class='list__student-details-item'>"+(stt++)+"</td>"+
              "<td class='list__student-details-item'>"+element1.MaSV+"</td>"+
              "<td class='list__student-details-item'>"+element1.HoDem+"</td>"+
              "<td class='list__student-details-item'>"+element1.Ten+"</td>"+
              "<td class='list__student-details-item'>"+element1.NgaySinh+"</td>"+
              "<td class='list__student-details-item'>"+element1.GioiTinh+"</td>"
              +"</tr>";

            });
            $(".list__student-details").html(result1);
             
            }
          )      ;
        });
        $(".list__student-close").click(function () {
          document.querySelector(".modal").style.display = "none";
        });
      }
    );
  }
  
  function loadHPChuaTichLuy() {
    $.post("./HocPhanChuaTL/loadHocKyHPChuaTichLuy", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        let maHK = element.MaHK;
        let maNH = element.MaNH;

        $.post("./HocPhanChuaTL/loadHPChuaTichLuy", { maHK: maHK, maNH: maNH }, function (data1) {
          result +=
            "<tr class='row-Top--Color row-Top--Bottom-Color'>" +
            "<td style='text-align: left; font-size: 15px' colspan=9 class='row-Top'>Năm học: " +
            element.namBD +
            "-" +
            element.namKT +
            " Học kỳ: " +
            element.hocky +
            "</td>" +
            "</tr>" +
            "<tr class='row-Top--Bottom-Color'>" +
            "<td colspan='9' style='text-align: left; padding-left: 10px' colspan=9>Bắt buộc (" +
            element.sumTC +
            " tín chỉ)</td>" +
            "</tr>";

          let objHP = JSON.parse(data1);

          objHP.forEach((element1) => {
            result += "<tr>" + "<td>" + element1.STT + "</td>" + "<td>" + element1.MaHocPhan + "</td>" + "<td>" + element1.TenHP + "</td>" + "<td>" + element1.SoTC + "</td>" + "<td></td>" + "<td></td>" + "<td></td>" + "<td></td>" + "<td></td>" + "</tr>";
          });

          $(".course-contain").html(result);
        });
      });
    });
  }

  function loadNamHoc() {
    $.post("./KetQua/loadNamHoc", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      result += "<option name='' id='' value=0>Tất cả</option>";
      obj.forEach((element) => {
        result += "<option name='' id='' value='" + element.namBD + "'>" + element.namBD + " - " + element.namKT + "</option>";
      });

      $(".year-contain").html(result);
    });
  }

  function loadHocKy() {
    $.post("./KetQua/loadHocKy", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      result += "<option class='semester-option' name='' id='' value=0>Tất cả</option>";
      obj.forEach((element) => {
        result += "<option class='semester-option' name='' id='' value='" + element.ID + "'>" + element.hocky + "</option>";
      });

      $(".semester-contain").html(result);
    });
  }

  function loadNamHocLSDKHP() {
    $.post("./KetQua/loadNamHoc", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      result += "<option name='' id='' value=0>Chọn--</option>";
      obj.forEach((element) => {
        result += "<option name='' id='' value='" + element.namBD + "'>" + element.namBD + " - " + element.namKT + "</option>";
      });

      $(".container__content-item-year").html(result);
    });
  }

  function loadHocKyLSDKHP() {
    $.post("./KetQua/loadHocKy", function (data) {
      let obj = JSON.parse(data);
      let result = "";

      result += "<option class='semester-option' name='' id='' value=0>--chọn--</option>";
      obj.forEach((element) => {
        result += "<option class='semester-option' name='' id='' value='" + element.ID + "'>" + element.hocky + "</option>";
      });

      $(".container__content-item-semester").html(result);
    });
  }

  function loadTraCuu() {
    let keywords = $(".keywords").val();
    $.post("./search/loadResult", { keywords: keywords }, function (data) {
      let obj = JSON.parse(data);
      let result = "";

      obj.forEach((element) => {
        result +=
          "<tr>" +
          "<td>" +
          element.MaHP +
          "</td>" +
          "<td>" +
          element.MaLHP +
          "</td>" +
          "<td>" +
          element.TenHP +
          "</td>" +
          "<td>" +
          element.STc +
          "</td>" +
          "<td>" +
          element.Loai +
          "</td>" +
          "<td>" +
          element.ThongTin +
          "</td>" +
          "<td>" +
          element.GiangVien +
          "</td>" +
          "<td>" +
          element.GioiHan +
          "</td>" +
          "<td>" +
          element.TuNgay +
          "</td>" +
          "<td>" +
          element.DenNgay +
          "</td>" +
          "</tr>";
      });

      $(".search__details").html(result);
    });
  }

  function loadHPDK(){
    $.post(
      "./LichSuDKHP/loadHPDK",
      function (data) {
        let obj = JSON.parse(data);
        let result = "";

        obj.forEach((element) => {
              result += "<tr class='container__content-details'>"+
              "<td class='container__content-details-item'>" +
              element.ThaoTac +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.MaLopHP +
              "</td>" +
              "<td class='container__content-details-item container__content-details-subject'>" +
              element.TenHP +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.MaTK +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.VaoNgay +
              "</td>" +
              "<td class='container__content-details-item detail-icon'>" +
              "<i class='fa-solid fa-circle-info'></i>" +
              "</td>" +
              "</tr>";
        });
        $(".Result__Contain-lsdk").html(result);
        $(".detail-icon").click(function () {
          document.querySelector(".modal").style.display = "flex";
          let result1 = "";
          let stt=1;
          let ID = $(this).attr("data-id");
          let MaNH = $(".container__content-item-year").find(":selected").attr("data-manh");
          let MaHK = $('.container__content-item-semester').find(":selected").attr("data-mahk");
          $.post(
            "./LichSuDKHP/loadDSSV",
            {MaLopHP:ID, MaHK: MaHK, MaNH: MaNH },
            function (data1) {
              let objDSSV = JSON.parse(data1);
              objDSSV.forEach((element1) => {
              result1 += "<tr class='container__content-detail'>"+
              "<td class='list__student-details-item'>"+(stt++)+"</td>"+
              "<td class='list__student-details-item'>"+element1.MaSV+"</td>"+
              "<td class='list__student-details-item'>"+element1.HoDem+"</td>"+
              "<td class='list__student-details-item'>"+element1.Ten+"</td>"+
              "<td class='list__student-details-item'>"+element1.NgaySinh+"</td>"+
              "<td class='list__student-details-item'>"+element1.GioiTinh+"</td>"
              +"</tr>";

            });
            $(".list__student-details").html(result1);
             
            }
          )      ;
        });
      })
    }

  //Xuất file excel điểm
  $(".option-result__print").click(function () {
    $.post("./KetQua/printResultPoint", { arrResult: arrResult, arrYear: arrYear, arrRL: arrRL }, function (data) {
      console.log(arrRL);
    });
  });

  function loadHPBiHuy() {
    $.post(
      "./LichSuDKHP/loadHPBiHuy",
      function (data) {
        let obj = JSON.parse(data);
        let result = "";

        obj.forEach((element) => {
              result += "<tr class='container__content-details container__content-details--cancel'>"+
              "<td class='container__content-details-item'>" +
              element.ThaoTac +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.MaLopHP +
              "</td>" +
              "<td class='container__content-details-item container__content-details-subject'>" +
              element.TenHP +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.MaTK +
              "</td>" +
              "<td class='container__content-details-item'>" +
              element.VaoNgay +
              "</td>" +
              "<td class='container__content-details-item detail-icon'>" +
            "<i class='fa-solid fa-circle-info'></i>" +
            "</td>" +
              "</tr>";
        });
        $(".Result__Contain-lsdk").html(result);
        $(".detail-icon").click(function () {
          document.querySelector(".modal").style.display = "flex";
          let result1 = "";
          let stt=1;
          let ID = $(this).attr("data-id");
          let MaNH = $(".container__content-item-year").find(":selected").attr("data-manh");
          let MaHK = $('.container__content-item-semester').find(":selected").attr("data-mahk");
          $.post(
            "./LichSuDKHP/loadDSSV",
            {MaLopHP:ID, MaHK: MaHK, MaNH: MaNH },
            function (data1) {
              let objDSSV = JSON.parse(data1);
              objDSSV.forEach((element1) => {
              result1 += "<tr class='container__content-detail'>"+
              "<td class='list__student-details-item'>"+(stt++)+"</td>"+
              "<td class='list__student-details-item'>"+element1.MaSV+"</td>"+
              "<td class='list__student-details-item'>"+element1.HoDem+"</td>"+
              "<td class='list__student-details-item'>"+element1.Ten+"</td>"+
              "<td class='list__student-details-item'>"+element1.NgaySinh+"</td>"+
              "<td class='list__student-details-item'>"+element1.GioiTinh+"</td>"
              +"</tr>";

            });
            $(".list__student-details").html(result1);
             
            }
          );
        });
      })
    }
    
    
});
