<?php include "include/header.php"; ?>


<div class="achivements" style="background: url(assets/images/slide/breadcrumb.jpg);padding: 50px;">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0" style="color:#fff;">FRANCHISE ONLINE FORM</h2>
        <p style="color:#fff;">Home / Franchise Online Form</p>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<div class="container content">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0">FRANCHISE ONLINE FORM</h2>
    </div>
    <div class="mb-4" align="justify">
        <form action="admin/action/franchise_registration_post.php" method="post" accept-charset="utf-8">
            <div class="row">
                <div class="col-sm-6">
                    <p>NAME OF THE STUDY CENTER :<br />
                        <input type="text" name="center_name" value="" class="form-control" required />
                    </p>
                    <p>STATE :<br />
                        <select name="center_state" class=form-control required>
                            <optgroup label="">
                                <option value="">Select state</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu &amp;amp; Kashmir">Jammu &amp; Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Andaman &amp;amp; Nicobar">Andaman &amp; Nicobar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman &amp;amp; Diu">Daman &amp; Diu</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                            </optgroup>
                        </select>
                    </p>
                    <p>BLOCK :<br />
                        <input type="text" name="center_block" value="" class="form-control" required />
                    </p>
                    <p>PIN CODE :<br />
                        <input type="text" name="center_pincode" value="" class="form-control" required />
                    </p>
                    <p>PH./ MOBILE (STD CODE) :<br />
                        <input type="text" name="center_mobile" value="" class="form-control" required />
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>CENTER HEAD / DIRECTOR'S NAME :<br />
                        <input type="text" name="center_director" value="" class="form-control" required />
                    </p>
                    <p>DISTT :<br />
                        <input type="text" name="center_district" value="" class="form-control" required />
                    </p>
                    <p>City :<br />
                        <input type="text" name="center_city" value="" class="form-control" required />
                    </p>
                    <p>E-MAIL :<br />
                        <input type="email" name="center_email" value="" class="form-control" required />
                    </p>
                </div>
                <div class="col-sm-12">
                    <p>Message :<br />
                        <textarea cols="40" rows="10" class="textarea form-control" name="center_message"></textarea>
                    </p>
                    <p><button type="submit" name="submit" class="btn btn-primary">Submit</button></p>

                </div>

            </div>
        </form>
    </div>
</div>






<?php include "include/footer.php"; ?>