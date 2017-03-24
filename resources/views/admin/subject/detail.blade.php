
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in" id="why">
                    <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
                    <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>JoeSixPack@Sixpacksrus.com</a> for any other inquiries.</p>
                </div>
                <div class="tab-pane fade active in" id="signin">
                    <div id="catlist">
                        <dl>
                            <dt><img src="{{url('../resources/upload/subject/'.$subject->avatar)}}" alt="Product image" width="200" height="200" /><strong>Info</strong><a href="#">{{$subject->name}}</a>
                                <br><a href="#">{{$subject->name}}</a>
                            </dt>
                            <dd>
                                {!! $description->description !!}
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="tab-pane fade" id="signup">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Sign Up Form -->
                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="Email">Email:</label>
                                <div class="controls">
                                    <input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="userid">Alias:</label>
                                <div class="controls">
                                    <input id="userid" name="userid" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group">
                                <label class="control-label" for="password">Password:</label>
                                <div class="controls">
                                    <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                                    <em>1-8 Characters</em>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
                                <div class="controls">
                                    <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
                                </div>
                            </div>

                            <!-- Multiple Radios (inline) -->
                            <br>
                            <div class="control-group">
                                <label class="control-label" for="humancheck">Humanity Check:</label>
                                <div class="controls">
                                    <label class="radio inline" for="humancheck-0">
                                        <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                                    <label class="radio inline" for="humancheck-1">
                                        <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="confirmsignup"></label>
                                <div class="controls">
                                    <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <style>
                #catlist{
                    /*border:1px dashed #ccc;*/
                    border-bottom:none;
                    width:auto;
                    margin:10px auto;
                }
                #catlist dl{
                    width:auto;
                    margin:0 auto;
                    /*border-bottom:1px dashed #ccc;*/
                    padding:10px;
                    overflow:hidden;
                    /*background:#f2f2f2;*/
                }
                #catlist dd{overflow:auto}
                #catlist dt strong{
                    float:right;
                    padding:0 0 0 20px;
                }
                #catlist dt img{
                    float:left;
                    margin:0 10px 0 0;
                    border:1px solid #000;
                }
                * html dd{height:1%}/* 3px jog*/
            </style>