<div class="container mt-4">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Welcome to GrenovateHub, Nguyen Tan Huy FGW HCM!</h2>
                
                    <a href="/add-question" class="btn btn-primary">
                      <i class="bi bi-plus-lg"></i> Add Question
                    </a>
                    
                </div>
                <p>Seek help from peers and contribute answers to support others.</p>
            </div>
        

</div>
    <div class="grid-container">
        <!-- Community Points Box -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Community Points</div>
                <div class="card-meta">
                    <span class="badge badge-success">+5</span>
                </div>
            </div>
            <div class="card-content">
                <div class="points-display">
                    <span class="points-value">150</span>
                    <div class="chart-container">
                        <svg width="100%" height="60" viewBox="0 0 180 30" xmlns="http://www.w3.org/2000/svg">
                            <rect width="100%" height="33%" fill="var(--accent)"></rect>
                            <rect width="100%" height="33%" fill="var(--accent)" y="20"></rect>
                            <path class="points-path" stroke="var(--primary)" fill="none" stroke-width="3" 
                                  d="M0 27 L30 20 L60 15 L90 10 L120 15 L150 5 L180 5"></path>
                        </svg>
                        <ul class="chart-labels">
                            <li>Jun 06</li>
                            <li>Jun 16</li>
                            <li>Jun 26</li>
                        </ul>
                    </div>
                </div>
                <span class="help-text">Earn points by <a href="/help/asking" class="hover-effect">Asking</a>, <a href="/help/answering" class="hover-effect">Answering</a>, & <a href="/help/editing" class="hover-effect">Editing</a>.</span>
            </div>
        </div>
        <!-- Badge Progress Box -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Badge Progress</div>
                <div class="card-meta">
                    <button class="btn btn-icon" title="Choose a badge to track">
                        <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="var(--foreground)">
                            <path d="m14.53 6.3l.28.67C17 7.77 17 7.86 17 8.12V9.8c0 .26 0 .35-2.18 1.22l-.27.66c.98 2.11.91 2.18.73 2.37l-1.3 1.29h-.15q-.3 0-2.14-.8l-.66.27C10.23 17 10.13 17 9.88 17H8.2c-.26 0-.35 0-1.21-2.18l-.67-.27c-1.81.84-2.03.84-2.1.84h-.14l-.12-.1-1.19-1.2c-.18-.18-.24-.25.7-2.4l-.28-.65C1 10.24 1 10.14 1 9.88V8.2c0-.27 0-.35 2.18-1.21l.27-.66c-.98-2.12-.91-2.19-.72-2.39l1.28-1.28h.16q.3.01 2.14.8l.66-.27C7.77 1 7.87 1 8.12 1H9.8c.26 0 .34 0 1.2 2.18l.67.28c1.82-.84 2.03-.84 2.1-.84h.14l.12.1 1.2 1.19c.18.18.24.25-.7 2.4m-8.4 3.9a3.1 3.1 0 1 0 5.73-2.4 3.1 3.1 0 0 0-5.72 2.4"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card-content">
                <div class="progress-container">
                    <div class="progress-label">
                        <span class="badge-icon bronze"></span>
                        <span class="badge-name">Collaborator - 0/5</span>
                    </div>
                    <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%"></div>
                    <span class="badge-description">Answer 5 questions to earn this badge.</span>
                </div>
            </div>
        </div>
        <!-- Watched Topics Box -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Watched Topics</div>
                <div class="card-meta">
                    <button class="btn btn-icon" title="Customize topics">
                        <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="var(--foreground)">
                            <path d="m14.53 6.3l.28.67C17 7.77 17 7.86 17 8.12V9.8c0 .26 0 .35-2.18 1.22l-.27.66c.98 2.11.91 2.18.73 2.37l-1.3 1.29h-.15q-.3 0-2.14-.8l-.66.27C10.23 17 10.13 17 9.88 17H8.2c-.26 0-.35 0-1.21-2.18l-.67-.27c-1.81.84-2.03.84-2.1.84h-.14l-.12-.1-1.19-1.2c-.18-.18-.24-.25.7-2.4l-.28-.65C1 10.24 1 10.14 1 9.88V8.2c0-.27 0-.35 2.18-1.21l.27-.66c-.98-2.12-.91-2.19-.72-2.39l1.28-1.28h.16q.3.01 2.14.8l.66-.27C7.77 1 7.87 1 8.12 1H9.8c.26 0 .34 0 1.2 2.18l.67.28c1.82-.84 2.03-.84 2.1-.84h.14l.12.1 1.2 1.19c.18.18.24.25-.7 2.4m-8.4 3.9a3.1 3.1 0 1 0 5.73-2.4 3.1 3.1 0 0 0-5.72 2.4"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card-content">
                <div class="topics-list">
                    <em>No topics watched yet!</em>
                </div>
                <button class="btn btn-outline">Customize your feed</button>
            </div>
        </div>
    </div>
    </div>



    <h2>Interesting posts for you</h2>


  

<div class="row" id="questionsList">
    <?php foreach ($VIP_questions as $question): ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <img src="<?php echo htmlspecialchars($question['image']); ?>" class="card-img-top" alt="Question Screenshot">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($question['title']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($question['text']); ?></p>
                    <div class="d-flex align-items-center mb-3">
                        <!-- <img src="<?php echo htmlspecialchars($question['user_image']); ?>" class="rounded-circle me-2" width="30" height="30" alt="User"> -->
                        <span><?php echo htmlspecialchars($question['username']); ?></span>
                    </div>
                    <span class="badge bg-primary mb-2"><?php echo htmlspecialchars($question['module']); ?></span>
                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<h2>Other Questions</h2>


   
<?php foreach ($questions as $question): ?>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card h-100" style="border: 1px solid var(--border); border-radius: var(--radius); transition: transform 0.2s;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="flex-1">
                                <h5 class="card-title" style="font-size: 1.125rem; font-weight: 600; color: var(--card-foreground); margin-bottom: 0.5rem;">
                                    <?php echo htmlspecialchars($question['title']); ?>
                                </h5>
                                <p class="card-text mb-3" style="color: var(--foreground); opacity: 0.7; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                    <?php echo htmlspecialchars($question['text']); ?>
                                </p>
                                <div class="d-flex align-items-center text-muted fs-body2" style="font-size: 0.875rem;">
                                    <span class="me-3">By: <span class="font-weight-bold text-primary"><?php echo htmlspecialchars($question['username'] ?? 'Anonymous'); ?></span></span>
                                    <span class="me-3">Module: <span class="font-weight-bold badge bg-primary"><?php echo htmlspecialchars($question['module'] ?? 'Uncategorized'); ?></span></span>
                                    <span><?php echo htmlspecialchars(date('m/d/Y', strtotime($question['date']))); ?></span>
                                </div>
                            </div>
                            <div class="ms-3 flex-shrink-0">
                                <div style="width: 80px; height: 80px; background: var(--accent); border-radius: var(--radius); display: flex; align-items: center; justify-content: center;">
                                    <?php if (!empty($question['image'])): ?>
                                        <img src="<?php echo htmlspecialchars($question['image']); ?>" alt="Question Screenshot" style="width: 80px; height: 80px; object-fit: cover; border-radius: var(--radius);">
                                    <?php else: ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image" style="color: var(--foreground); opacity: 0.5;">
                                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                            <circle cx="9" cy="9" r="2"></circle>
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                        </svg>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <form action="edit_post.php" method="GET" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($question['id']); ?>">
                                <button type="submit" class="btn btn-sm btn-outline-primary" style="padding: 0.5rem; border-radius: var(--radius);" aria-label="Edit post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen">
                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"></path>
                                    </svg>
                                </button>
                            </form>
                            <form action="delete_post.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($question['id']); ?>">
                                <button type="submit" class="btn btn-sm btn-outline-danger" style="padding: 0.5rem; border-radius: var(--radius);" aria-label="Delete post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
