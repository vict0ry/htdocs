<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="/formRequests/request.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request</h4>
      </div>
      <div class="modal-body">
    <h3>Describe your needs</h3><br>
        <div class="row form-group">
   <label class="col-md-4 control-label" for="youWillStudy">You want to study</label>
   <div class="col-md-12">
      <div class="input-group">
         <span class="input-group-addon">
         <i class="glyphicon glyphicon-list"></i>
         </span>
         <select id="youWillStudy" name="youWillStudy" class="form-control input-md">
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
</div>
        <div class="row form-group">
            <label class="col-md-3 control-label" for="description">Description</label>
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </span>
                    <textarea class="form-control" id="description" name="description" placeholder="e.g. Hi, I want you to prepair me to FCE exams..."></textarea>
                </div>
            </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 control-label" for="mobile">Price range</label>
          <div class="col-md-12">
            <div class="col-md-3" style="padding-left:0px;">
                <div class="input-group">
                    <span class="input-group-addon">
                      Od
                     </span>
                <input id="priceFrom" maxlength="10" name="priceFrom" placeholder="" class="form-control input-md ac_mobile" type="tel" value=''>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-addon">
                      Do
                     </span>
                <input id="priceTo" maxlength="10" name="priceTo" placeholder="" class="form-control input-md ac_mobile" type="tel" value=''>
                </div>
            </div>
        </div>
      </div>
    <h3>Contact information</h3><br>
      <div class="row form-group">
        <label class="col-md-3 control-label" for="name">Your Name</label>
          <div class="col-md-12">
              <div class="input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-phone"></i>
                   </span>
              <input id="name" maxlength="10" name="name" placeholder="Ondřej Zeman" class="form-control input-md ac_mobile" type="tel" value=''>
              </div>
          </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 control-label" for="email">Email</label>
          <div class="col-md-12">
              <div class="input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-envelope"></i>
                   </span>
              <input id="email" maxlength="10" name="email" placeholder="e.g. ondrej.zeman@seznam.cz" class="form-control input-md ac_mobile" type="tel" value=''>
              </div>
          </div>
      </div>
      <div class="row form-group">
        <label class="col-md-3 control-label" for="mobile">Phone number</label>
          <div class="col-md-12">
              <div class="input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-phone"></i>
                   </span>
              <input id="mobile" maxlength="10" name="mobile" placeholder="e.g. +420 608-315-645" class="form-control input-md ac_mobile" type="tel" value=''>
              </div>
          </div>
      </div>


      </div>
      <div class="modal-footer">
        <input type="submit" value="send" name="btnsave" class="btn btn-default">
      </div>
    </div>
</form>
  </div>
</div>
