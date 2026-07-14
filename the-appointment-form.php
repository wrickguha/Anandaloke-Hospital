<?php debug_backtrace() || header('location:404.php'); ?>
<div class="button-banner-wrap wow fadeInDown">
    <div class="container">
        <div class="row button-banner">
            <div class="col-md-12 first">
                <div class="appoint box-shadow-effect2 prelative">
                    <form class="appointment-form" action="check-appoint-home" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Patient Name" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone No" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail ID" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" name="age" class="form-control" placeholder="Age" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="gender" required>
                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="sandbox-container">
                                        <div class="input-daterange" id="datepicker">
                                            <input class="form-control" name="date" type="text" placeholder="Appoinment Date" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="department" required>
                                        <option value="">Select Department</option>
                                        <?php
                                        $sel = $con->query("SELECT * FROM department");
                                        while ($fetch = $sel->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $fetch['id']; ?>"><?php echo $fetch['department']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-default" name="submit">Make an Appoinment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>