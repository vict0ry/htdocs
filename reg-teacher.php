<?PHP
require_once './template/header.php';
require_once 'includes/security.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/template/header.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/template/nav.php';
?>

<body>
    <div class="container">
        <form action="<?PHP if($user->isLoggedIn()): ?>/saveRegistered.php<?PHP else: ?>/saveProfile.php<?PHP endif; ?>" enctype="multipart/form-data" class="form-horizontal" method="post" action="#">
            <fieldset>
                <div class="row form-group">
                  <div class="row form-group">
                    <div class="col-md-3 col-md-offset-3">
                      <div class="text-center">
                        <img src="http://s3.amazonaws.com/37assets/svn/765-default-avatar.png" width="40%" class="avatar" alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" name="user_image" class="form-control">
                      </div>
                    </div>
                 </div>
                    <div class="row form-group">
                        <label class="col-md-3 control-label" for="firstName">First Name</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                              </span>
                                <input id="firstName" name="firstName" placeholder="" class="form-control input-md" type="text">
                            </div>
                          </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 control-label" for="lastName">Last Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input id="lastName" name="lastName" placeholder="" class="form-control input-md" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                      <label class="col-md-3 control-label">Gender</label>
                      <div class="col-md-8">
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="0" checked>Man
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="gender" value="1">Woman
                        </label>
                      </div>
                    </div>

                    <div class="row form-group">
                      <label class="col-md-3 control-label" for="mobile">Contact No.</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-phone"></i>
                                 </span>
                            <input id="mobile" maxlength="10" name="mobile" placeholder="xxxxxxxxxxxx" class="form-control input-md ac_mobile" type="tel" value=''>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 control-label" for="nativeLanguage">Your mother tongue</label>
                          <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-list"></i>
                                </span>
                                <select id="nativeLanguage" name="nativeLanguage" class="form-control input-md">
                                                  <option value="ar" lang="ar">العربية</option><!-- Al-ʿArabīyah -->
                                                  <option value="az" lang="az">Azərbaycanca</option>
                                                  <option value="bg" lang="bg">Български</option><!-- Bulgarski -->
                                                  <option value="ca" lang="ca">Català</option>
                                                  <option value="cs" lang="cs">Česky</option>
                                                  <option value="da" lang="da">Dansk</option>
                                                  <option value="de" lang="de">Deutsch</option>
                                                  <option value="el" lang="el">Ελληνικά</option><!-- Ellīniká -->
                                                  <option value="en" lang="en" selected="selected">English</option>
                                                  <option value="es" lang="es">Español</option>

                                                  <option value="et" lang="et">Eesti</option>
                                                  <option value="eu" lang="eu">Euskara</option>
                                                  <option value="fa" lang="fa">فارسی</option><!-- Fārsi -->
                                                  <option value="fr" lang="fr">Français</option>
                                                  <option value="gl" lang="gl">Galego</option>
                                                  <option value="ko" lang="ko">한국어</option><!-- Hangugeo -->
                                                  <option value="hy" lang="hy">Հայերեն</option><!-- Hayeren -->
                                                  <option value="hi" lang="hi">हिन्दी</option><!-- Hindī -->
                                                  <option value="hr" lang="hr">Hrvatski</option>
                                                  <option value="id" lang="id">Bahasa Indonesia</option>
                                                  <option value="it" lang="it">Italiano</option>
                                                  <option value="he" lang="he">עברית</option><!-- ‘Ivrit -->
                                                  <option value="la" lang="la">Latina</option>
                                                  <option value="lt" lang="lt">Lietuvių</option>
                                                  <option value="hu" lang="hu">Magyar</option>
                                                  <option value="ms" lang="ms">Bahasa Melayu</option>
                                                  <option value="min" lang="min">Bahaso Minangkabau</option>
                                                  <option value="nl" lang="nl">Nederlands</option>
                                                  <option value="ja" lang="ja">日本語</option><!-- Nihongo -->
                                                  <option value="no" lang="nb">Norsk (bokmål)</option>
                                                  <option value="nn" lang="nn">Norsk (nynorsk)</option>
                                                  <option value="uz" lang="uz">Oʻzbekcha / Ўзбекча</option>
                                                  <option value="pl" lang="pl">Polski</option>
                                                  <option value="pt" lang="pt">Português</option>
                                                  <option value="kk" lang="kk">Қазақша / Qazaqşa / قازاقشا</option>
                                                  <option value="ro" lang="ro">Română</option>
                                                  <option value="ru" lang="ru">Русский</option><!-- Russkiy -->
                                                  <option value="sah" lang="sah">Саха Тыла</option><!-- Saxa Tyla -->

                                                  <option value="ceb" lang="ceb">Sinugboanong Binisaya</option><!-- Cebuano -->
                                                  <option value="sk" lang="sk">Slovenčina</option>
                                                  <option value="sl" lang="sl">Slovenščina</option>
                                                  <option value="sr" lang="sr">Српски / Srpski</option>
                                                  <option value="sh" lang="sh">Srpskohrvatski / Српскохрватски</option>
                                                  <option value="fi" lang="fi">Suomi</option>
                                                  <option value="sv" lang="sv">Svenska</option>
                                                  <option value="tr" lang="tr">Türkçe</option>
                                                  <option value="crh" lang="crh">Qırımtatar tili</option>
                                                  <option value="ua" lang="ua">Українська</option><!-- Ukrayins’ka -->
                                                  <option value="ur" lang="ur">اُردُو</option><!-- Urdu -->
                                                  <option value="vi" lang="vi">Tiếng Việt</option>
                                                  <option value="vo" lang="vo">Volapük</option>
                                                  <option value="war" lang="war">Winaray</option>
                                                  <option value="zh" lang="zh">中文</option><!-- Zhōngwén -->
                              </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a id="addmore" onclick=add_mobile()>
                                <div class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add more</div>
                            </a>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 control-label" for="topicName">Name of your topic</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">
              <i class="glyphicon glyphicon-list"></i>
            </span>
                                <input id="topicName" name="topicName" placeholder="" class="form-control input-md ac_state" required="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 control-label" for="description">Description</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">
  			                            <i class="glyphicon glyphicon-pencil"></i>
  			                        </span>
                                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label class="col-md-3 control-label" for="youWillTeach">You will teach</label>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-list"></i>
                </span>
                <select id="youWillTeach" name="youWillTeach" class="form-control input-md">
                                  <option value="add" selected="">Select</option>


                                          <optgroup label="Foreign languages">

                                              <option value="english">
                                                  English language
                                              </option>

                                              <option value="spanish">
                                                  Spanish language
                                              </option>

                                              <option value="german">
                                                  German language
                                              </option>

                                              <option value="french">
                                                  French language
                                              </option>

                                              <option value="japanese">
                                                  Japanese language
                                              </option>

                                              <option value="chinese">
                                                  Chinese language
                                              </option>

                                              <option value="italian">
                                                  Italian language
                                              </option>

                                              <option value="arabic">
                                                  Arabic language
                                              </option>

                                              <option value="polish">
                                                  Polish language
                                              </option>

                                              <option value="ukrainian">
                                                  Ukrainian language
                                              </option>

                                              <option value="russian">
                                                  Russian language
                                              </option>

                                              <option value="portuguese">
                                                  Portuguese language
                                              </option>

                                              <option value="indonesian">
                                                  Indonesian language
                                              </option>

                                              <option value="hindi">
                                                  Hindi language
                                              </option>

                                              <option value="thai">
                                                  Thai language
                                              </option>

                                              <option value="greek">
                                                  Greek language
                                              </option>

                                              <option value="hungarian">
                                                  Hungarian language
                                              </option>

                                              <option value="dutch">
                                                  Dutch language
                                              </option>

                                              <option value="danish">
                                                  Danish language
                                              </option>

                                              <option value="korean">
                                                  Korean language
                                              </option>

                                              <option value="norwegian">
                                                  Norwegian language
                                              </option>

                                              <option value="serbian">
                                                  Serbian language
                                              </option>

                                              <option value="turkish">
                                                  Turkish language
                                              </option>

                                              <option value="finnish">
                                                  Finnish language
                                              </option>

                                              <option value="czech">
                                                  Czech language
                                              </option>

                                              <option value="swedish">
                                                  Swedish language
                                              </option>

                                              <option value="hebrew">
                                                  Hebrew language
                                              </option>

                                              <option value="urdu">
                                                  Urdu language
                                              </option>

                                              <option value="punjabi">
                                                  Punjabi language
                                              </option>

                                              <option value="latin">
                                                  Latin language
                                              </option>

                                          </optgroup>



                                          <optgroup label="School subjects">

                                              <option value="math">
                                                  Math
                                              </option>

                                              <option value="algebra">
                                                  Algebra
                                              </option>

                                              <option value="geometry">
                                                  Geometry
                                              </option>

                                              <option value="geography">
                                                  Geography
                                              </option>

                                              <option value="biology">
                                                  Biology
                                              </option>

                                              <option value="chemistry">
                                                  Chemistry
                                              </option>

                                              <option value="physics">
                                                  Physics
                                              </option>

                                              <option value="computer">
                                                  Computer science
                                              </option>

                                              <option value="history">
                                                  History
                                              </option>

                                              <option value="social">
                                                  Social Sciences &amp; Humanities
                                              </option>

                                              <option value="law">
                                                  Law
                                              </option>

                                              <option value="literature">
                                                  Literature
                                              </option>

                                              <option value="economics">
                                                  Economics
                                              </option>

                                              <option value="tests">
                                                  Tests
                                              </option>

                                              <option value="accounting">
                                                  Accounting
                                              </option>

                                              <option value="business">
                                                  Business &amp; Management
                                              </option>

                                              <option value="statistics">
                                                  Statistics
                                              </option>

                                              <option value="psychology">
                                                  Psychology
                                              </option>

                                              <option value="philosophy">
                                                  Philosophy
                                              </option>

                                              <option value="sociology">
                                                  Sociology
                                              </option>

                                          </optgroup>



                                          <optgroup label="Hobbies and creativity">

                                              <option value="painting">
                                                  Art classes
                                              </option>

                                              <option value="acting">
                                                  Acting skills
                                              </option>

                                              <option value="music">
                                                  Music
                                              </option>

                                              <option value="pokemon">
                                                  Pokémon GO
                                              </option>

                                              <option value="arts">
                                                  Arts
                                              </option>

                                          </optgroup>

                </select>
                            </div>
                        </div>
                          <div class="col-md-2">
                            <div class="input-group">
                                <input id="price" name="price" placeholder="" class="form-control input-md" type="text">
                                <span class="input-group-addon">
                                  CZK
                                </span>
                            </div>
                          </div>

                          <div class="col-md-2">
                              <div class="input-group">
                                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-list"></i>
                  </span>
                  <select id="minutes" name="minutes" class="form-control input-md">
                      <option value="30">30 min</option>
                      <option value="60">60 min</option>
                      <option value="90">90 min</option>
                      <option value="120">120 min</option>
                  </select>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <a id="add_mobile" onclick=add_mobile()>
                                  <div class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add more</div>
                              </a>
                          </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-offset-3 col-md-4">
                        <label class="col-md-12">I can teach this days:</label>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="1" checked>Monday
                          </label>
                        </div>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="2" checked>Tuesday
                          </label>
                        </div>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="3" checked>Wednsday
                          </label>
                        </div>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="4" checked>Thursday
                          </label>
                        </div>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="5" checked>Friday
                          </label>
                        </div>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="6" checked>Saturday
                          </label>
                        </div>
                        <div class="col-md-3">
                          <label class="radio-inline">
                            <input type="checkbox" name="freeDay[]" value="7" checked>Sunday
                          </label>
                        </div>
                    </div>
                    </div>


                    <div class="row form-group">
                      <div class="col-md-9" style="float:right;"><button class="btn btn-primary" name="btnsave">Odeslat</button></div>
                    </div>
                </div>
              </fieldset>
</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</html>
