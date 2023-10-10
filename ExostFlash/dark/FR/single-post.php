<?php
	
	$recup = $db->query("SELECT * FROM blog WHERE id_blog= ".$_GET['id_post']);
	$row = $recup->fetch();

?>
						<!-- Post -->
						<div class="pb-3">
						    <header class="header-post">
						        <div class="header-post__date"><?= $row['mois']." ".$row['jour']." , ".$row['annee']?></div>
                                <h1 class="title title--h1"><?= $row['titre'] ?> in <?= $row['annee'] ?></h1>
								<div class="caption-post">
								    <p><?= $row['micro_text'] ?></p>
								</div>
								<div class="header-post__image-wrap">
								    <img class="cover lazyload" src="assets/img/blog/<?= $row['img'] ?>.png" alt="" />
								</div>
							</header>
							<div class="caption-post">
								<p><?= $row['text_1'] ?></p>
								<p><?= $row['text_2'] ?></p>
						    </div>
							<div class="gallery-post">
							    <img class="gallery-post__item cover lazyload" src="assets/img/blog/<?= $row['img_1'] ?>.png" data-zoom alt="" />
								<img class="gallery-post__item cover lazyload" src="assets/img/blog/<?= $row['img_2'] ?>.png" data-zoom alt="" />
								<div class="gallery-post__caption">Travail par <a href="#"><?= $row['taff_1'] ?></a>, <a href="#"><?= $row['taff_2'] ?></a></div>
							</div>
							<div class="caption-post">
							    <h3 class="title title--h3"><?= $row['grand_titre'] ?></h3>
								<p><?= $row['grand_text'] ?></p>
								<blockquote class="block-quote">
								    <p><?= $row['citation'] ?></p>
								    <span class="block-quote__author"><?= $row['cite'] ?></span>
								</blockquote>
							</div>
							<footer class="footer-post">
							</footer>
						</div>
						
						<div class="box-inner box-inner--rounded">
							<?php
								$querycount = "SELECT COUNT(*) AS count FROM comment_blog WHERE id_post = ".$_GET['id_post'];
								$resultc = mysqli_query($dbb, $querycount);
								$datac = mysqli_fetch_assoc($resultc);
								$countage = $datac['count'];
							?>
						    <h2 class="title title--h3">Comments <span class="color--light">(<?= $datac['count'] ?>)</span></h2>
							
								<?php

									$recups = $db->query("SELECT comment_blog.*, member.* FROM comment_blog INNER JOIN member ON comment_blog.id_user = member.id_user WHERE id_post = ".$_GET['id_post']." ORDER BY id_com DESC");
									while ($row_com = $recups->fetch()) {
										$date_com = new DateTime($row_com['create_date']);
										$dateActuelle = new DateTime();
										$interval = $dateActuelle->diff($date_com);
										$minutes = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;;
								?>
	                            <div class="comment-box">
								    <div class="comment-box__inner">
	                                    <svg class="avatar avatar--60" viewBox="0 0 84 84">
	                                        <g class="avatar__hexagon">
	                                            <image xlink:href="assets/img/avatar/<?= $row_com['photo'] ?>.png" height="100%" width="100%" />
	                                        </g>
	                                    </svg>
	                                    <div class="comment-box__body">
	                                        <h5 class="comment-box__details"><span><?= $row_com['pseudo'] ?></span><span class="comment-box__details-date"><?= $minutes ?> min ago</span></h5>
	                                        <p style="word-break: break-word;"><?= $row_com['texte'] ?></p>
											
											<!--
											<ul class="comment-box__footer">
											    <li><i class="font-icon icon-like-fill"></i> <span>15</span></li>
											    <li><i class="font-icon icon-reply"></i> <span>Reply</span></li>
											</ul>
											-->
	                                    </div>
									</div>
	                            </div>

							
							<!-- Comment form -->
							
							<?php
								}
								if (isset($_SESSION['id_user'])) {
							?>
							<form method="post" class="comment-form">
							    <textarea name="message_blog" id="commentForm" class="textarea textarea--white form-control" required="required" placeholder="Write a Comment..." rows="1"></textarea>
								<button name="btn_message" type="submit" class="btn"><i class="font-icon icon-send"></i></button>
							</form>
							<?php
								}
								else {
							?>

							<ul class="social-auth">
							    <li class="social-auth__item"><a href="?page=account&id_post=<?= $id_post_page ?>">Login </a></li>
							</ul>

							<?php
								}
							?>
							
					    </div>
					</div>