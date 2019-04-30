<div class="container">
  <div class="row">
    <div class="col-sm-10 " id="logout">
      <div class="page-header">
        <h3 class="">Leave your comment</h3>
      </div>
      <div class="comment-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="text-capitalize">Comments</h4></a></li>
          <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class=" text-capitalize">Add comment</h4></a></li>
        </ul>
        <div class="tab-content tab-blog">
          <div class="tab-pane active" id="comments-logout">
            <?php if ( count($comments) ) : ?>

              <ol class="base comment-list">
                <?php foreach ( $comments as $comment ) : ?>
                  <li id="comment-<?php echo $comment->comment_post_ID ?>">
                    <div class="media-body">
                      <div class="well well-lg">
                        <h4 class="media-heading text-uppercase reviews"><?php echo $comment->comment_author ?> </h4>
                        <ul class="media-date text-uppercase reviews list-inline">
                          Posted on <time datetime="<?php echo $comment->comment_date ?>" itemprop="datePublished"><?php echo date('d.m.Y', strtotime($comment->comment_date) ) ?></time>

                        </ul>
                        <p class="media-comment">
                          <?php echo $comment->comment_content ?>
                        </p>
                        </div>
                    </div>
                    <!-- <div class="comment">
                      <h6 class="comment-title"><?php echo $comment->comment_author ?> said:</h6>
                      <p class="comment-date">
                        Posted on <time datetime="<?php echo $comment->comment_date ?>" itemprop="datePublished"><?php echo date('d.m.Y', strtotime($comment->comment_date) ) ?></time>
                        at <?php echo date('H:i', strtotime($comment->comment_date) ) ?>
                      </p>
                      <div class="comment-body">
                        <?php echo $comment->comment_content ?>
                      </div>
                    </div> -->
                  </li>
                <?php endforeach ?>
              </ol>

            <?php else : ?>

              <h3>
                There are no responses to this article, why not be the first?
              </h3>

            <?php endif ?>

          </div>
          <div class="tab-pane" id="add-comment">
            <form action="<?php echo site_url('/wp-comments-post.php') ?>" method="post" class="form-horizontal" id="commentForm">
			<ul class="form-collection">
				<?php if ( is_user_logged_in() ) : ?>
					<li>
						<span class="field-hint">Logged in as <?php echo get_user_option('user_nicename') ?></span>
					</li>
				<?php else : ?>
					<li>
            <div class="form-group">
    				<div class="col-sm-10">
						<label for="comment-author" class="field-label">Name</label>
						<input class="form-control" type="text" name="author" id="comment-author" required />
          </div>
          </div>
          </li>
					<li>
            <div class="form-group">
    				<div class="col-sm-10">
						<label for="comment-email" class="field-label">Email</label>
						<input class="form-control" type="email" name="email" id="comment-email" required />
            </div>
            </div>
          </li>
				<?php endif ?>
        <div class="form-group">
				<div class="col-sm-10">
					<label class="field-label" for="comment-body" >Comment</label>
					<textarea class="form-control" name="comment" id="comment-body" cols="40" rows="5" required></textarea>
				</div>
        </div>
				<?php if ( ! is_user_logged_in() ) : ?>
					<li>
						<label for="comment-query" class="field-label">20 - 15 + 7 =</label>
						<input type="text" name="result" id-"comment-query" required />
					</li>
				<?php endif ?>
				<li class="button-field">
					<button class="btn btn-blog  btn-circle text-uppercase" type="submit">Post comment <i class="fa fa-send"></i></button>
					<?php comment_form_hidden_fields() ?>
				</li>
			</ul>
		</form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
