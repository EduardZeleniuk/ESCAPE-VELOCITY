<!-- Contact Form -->
									<section>
										<? print_message(); ?>
										<form method="post" action="contact-form-handler.php" enctype="multipart/form-data">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" value="Vasy Pupkin" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" value="pupkin@mail.com" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4">Hello, I am Vasy Pupkin</textarea>
												</div>
											</div>
											<div class="row 50%">
					                <div class="12u">
					                    <input type="file" name="image[]" multiple />
					                </div>
					            </div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>