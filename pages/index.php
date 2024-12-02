<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Disease Prediction DEMO</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge,chrome=1" />
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/maruti-style.css" />
    <link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
  </head>
  <body>
    <!--Header-part-->
    <div id="header">
      <h1><a href="dashboard.html">CongMinh</a></h1>
    </div>
    <!--close-Header-part--> 

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
      </ul>
    </div>
    <!--close-top-Header-menu-->

    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
      <ul>
        <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Home</span></a> </li>
      </ul>
    </div>
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Disease Prediction" class="tip-bottom"><i class="icon-home"></i> Disease Prediction</a></div>
      </div>
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">

            <div class="widget-box">
              <div class="widget-title" style="height: ;"><span class="icon"><i class="icon-hand-right"></i></span>
                <h5 style="font-weight: bold !important;">NHẬP THÔNG TIN BỆNH NHÂN</h5>
                <div class="buttons" style="font-weight:bold !important;"><a href="#" class="btn btn-success"><i class="icon-check"></i>  SUBMIT  </a></div>
              </div>
              <div class="widget-title">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#tab1">TRIỆU CHỨNG LÂM SÀNG</a></li>
                  <li><a data-toggle="tab" href="#tab2">SINH HÓA</a></li>
                  <li><a data-toggle="tab" href="#tab3">HUYẾT HỌC</a></li>
                  <li><a data-toggle="tab" href="#tab4">NƯỚC TIỂU</a></li>
                  <li><a data-toggle="tab" href="#tab5">MIỄN DỊCH</a></li>
                  <li><a data-toggle="tab" href="#tab6">VI SINH</a></li>
                  <li><a data-toggle="tab" href="#tab7">KHÁC</a></li>
                </ul>
              </div>
              <div class="widget-content tab-content">
                <div id="tab1" class="tab-pane active" style="height:300px !important">
                  <div class="control-group">
                    <div class="controls">
                      <textarea class="span12" rows="14"></textarea>
                    </div>
                  </div>
                </div>
                <div id="tab2" class="tab-pane" style="height:300px !important">
                  <div class="span6">
                      <div class="widget-content nopadding">
                          <div class="control-group">
                            <label class="control-label">Định lượng Albumin [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="sh_ALB" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Globulin [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="sh_GLO" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Protein toàn phần [Máu]</label>
                            <div class="controls">
                              <input type="password"  class="span11" placeholder=""  id="sh_PROTP" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng RF (Reumatoid Factor) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng sắt huyết thanh</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Glucose [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Urê máu [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Đo hoạt độ AST (GOT) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Đo hoạt độ ALT (GPT) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Acid Uric [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Bilirubin gián tiếp</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Bilirubin toàn phần [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Bilirubin trực tiếp [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Calci toàn phần [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Calci toàn phần [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Testosterol [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Estradiol [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng β2 microglobulin [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng PTH (Parathyroid Hormon) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Sắt [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng CRP</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">RF Test</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Phospho (máu)</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="span6">
                      <div class="widget-content nopadding">
                          <div class="control-group">
                            <label class="control-label">Pb/Blood (Chì /máu) (Plomb) ( Lead)</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Creatinin (Máu)</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Đo hoạt độ GGT (Gama Glutamyl Transferase)</label>
                            <div class="controls">
                              <input type="password"  class="span11" placeholder=""  id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Cholesterol toàn phần (máu)</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng HDL-C (High Density Lipoprotein Cholesterol) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng LDL-C (Low Density Lipoprotein Cholesterol)</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Lipit</label>
                            <div class="controls">
                              <input type="password"  class="span11" placeholder=""  id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng FSH (Follicular Stimulating Hormone) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Progesteron [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Troponin I [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Cortisol (máu)</label>
                            <div class="controls">
                              <input type="password"  class="span11" placeholder=""  id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Xét nghiệm CK - MB</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng HbA1c [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Anti - TPO (Anti- thyroid Peroxidase antibodies) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng CRP hs (C-Reactive Protein high sesitivity) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Định lượng Anti - TPO (Anti- thyroid Peroxidase antibodies) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Đo hoạt độ ALP (Alkalin Phosphatase) [Máu]</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <label class="control-label"><b>Điện giải đồ [Máu]</b></label>
                          <div class="control-group">
                            <label class="control-label">K+</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Na+</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Cl-</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Calci ion hóa</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Calci</label>
                            <div class="controls">
                              <input type="text" class="span11" placeholder="" id="" />
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div id="tab3" class="tab-pane" style="height:300px !important">
                  <div class="span12">
                      <div class="widget-content nopadding">
                          <div class="control-group">
                            <label class="control-label">Thể tích khối hồng cầu (hematocrit)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Tìm ký sinh trùng sốt rét trong máu</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Xét nghiệm số lượng và độ tập trung tiểu cầu</label>
                            <div class="controls">
                              <input type="password"  class="span12" placeholder=""  id="" />
                            </div>
                          </div>
                          <label class="control-label"><b>Tổng phân tích tế bào máu</b></label>
                          <div class="control-group">
                            <label class="control-label">Baso (số lượng bạch cầu ưu base)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Baso (tỷ lệ % bạch cầu ái kiềm)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Eos (số lượng bạch cầu ái toan)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Eos (tỷ lệ % bạch cầu ái toan)</label>
                            <div class="controls">
                              <input type="password"  class="span12" placeholder=""  id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Hb (hgb)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Hct (khối hồng cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Lym (số lượng bạch cầu lympho)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Lym (tỷ lệ % bạch cầu lympho)</label>
                            <div class="controls">
                              <input type="password"  class="span12" placeholder=""  id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Mch (lượng hb tế bào hồng cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Mchc (nồng độ hb tế bào hồng cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Mcv (thể tích tế bào của một hồng cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Mono (số lượng bạch cầu mono)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Mono (tỷ lệ % bạch cầu mono)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Mpv (thể tích tb tiểu cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Neut (số lượng bạch cầu trung tính)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Neut (tỷ lệ % bạch cầu trung tính)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Pct (khối tiểu cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Pdw (độ phân bố tiểu cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Plt (số lượng tiểu cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Rbc (số lượng hồng cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Rdw (độ phân bố hồng cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">Wbc (số lượng bạch cầu)</label>
                            <div class="controls">
                              <input type="text" class="span12" placeholder="" id="" />
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div id="tab4" class="tab-pane" style="height:300px !important">
                  <p>
                    full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. 
                  </p>
                </div>
                <div id="tab5" class="tab-pane" style="height:300px !important">
                  <p>
                    full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. 
                  </p>
                </div>
                <div id="tab6" class="tab-pane" style="height:300px !important">
                  <p>
                    full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. 
                  </p>
                </div>
                <div id="tab7" class="tab-pane" style="height:300px !important">
                  <p>
                    full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end. 
                  </p>
                </div>
              </div>                  
            </div>


          </div>
        </div>
        <div class="row-fluid">
          <div class="widget-box">
              <div class="widget-title" style="height: ;"><span class="icon"><i class="icon-hand-right"></i></span>
                <h5 style="font-weight: bold !important;">KẾT QUẢ DỰ ĐOÁN</h5>
              </div> 
              <div class="widget-content" style="height:200px !important" id="result_container">
              </div> 
            </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div id="footer" class="span12"> 2024 &copy; CongMinh </div>
    </div>
    <script src="js/excanvas.min.js"></script> 
    <script src="js/jquery.min.js"></script> 
    <script src="js/jquery.ui.custom.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.peity.min.js"></script> 
    <script src="js/fullcalendar.min.js"></script> 
    <script src="js/maruti.js"></script> 
    <script src="js/maruti.chat.js"></script> 
    <script type="text/javascript">
      function goPage (newURL) {
        if (newURL != "") {
          if (newURL == "-" ) {
            resetMenu();            
          } else {  
            document.location.href = newURL;
          }
        }
      }

      function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
      }
    </script>
  </body>
</html>
