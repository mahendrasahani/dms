@extends('layouts/backend/main')
@section('main-section')
    <div class="page-wrapper">
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <h1 class="mb-0 fw-bold">Comment Document</h1>
                </div>
                <div class="col-lg-4 col-md-6 d-none d-md-flex align-items-center justify-content-end">
                    <a href="{{ route('backend.document.create') }}">
                        <button class="btn btn-info d-flex align-items-center ms-2" title="View Code" data-bs-toggle="modal"
                            data-bs-target="#view-code5-1-modal">
                            <i class="ri-add-line me-1"></i>
                            Add New Document
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12">
                    <h1 class="mb-4">Comments</h1>
                </div>
            </div>
    
            <!-- Add Comment Form -->
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Add a Comment</h5>
                            <form id="addCommentForm">
                                <div class="mb-3">
                                    <label for="commenterName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="commenterName" placeholder="Your name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="commenterEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="commenterEmail" placeholder="Your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="commentText" class="form-label">Comment</label>
                                    <textarea class="form-control" id="commentText" rows="3" placeholder="Your comment" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Static Comments List -->
            <div class="row mt-4">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">All Comments</h5>
                            <ul class="list-group" id="commentsList">
                                <!-- Static comments with reply forms -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>John Doe</strong>
                                        <small class="text-muted">john.doe@example.com</small>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm ms-2">
                                            Reply
                                        </button>
                                    </div>
                                    <!-- Reply Form (static) -->
                                    <div class="mt-3 reply-form" style="display: none;">
                                        <h6>Reply to John Doe</h6>
                                        <form>
                                            <div class="mb-3">
                                                <textarea class="form-control" rows="2" placeholder="Your reply"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                                        </form>
                                    </div>
                                </li>
    
                                <!-- Another static comment -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Jane Smith</strong>
                                        <small class="text-muted">jane.smith@example.com</small>
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn btn-primary btn-sm ms-2">
                                            Reply
                                        </button>
                                    </div>
                                    <!-- Reply Form (static) -->
                                    <div class="mt-3 reply-form" style="display: none;">
                                        <h6>Reply to Jane Smith</h6>
                                        <form>
                                            <div class="mb-3">
                                                <textarea class="form-control" rows="2" placeholder="Your reply"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                                        </form>
                                    </div>
                                </li>
    
                                <!-- Add more static comments with reply forms as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @section('javascript-section')
    {{-- <script>
        // Function to fetch comments from a mock API
        function fetchComments() {
            axios.get('https://jsonplaceholder.typicode.com/comments')
                .then(response => {
                    const comments = response.data.slice(0, 5); // Limit to first 5 comments for simplicity
                    displayComments(comments);
                })
                .catch(error => console.error('Error fetching comments:', error));
        }

        // Function to display comments
        function displayComments(comments) {
            const commentsList = document.getElementById('commentsList');
            commentsList.innerHTML = ''; // Clear previous comments

            comments.forEach(comment => {
                const li = document.createElement('li');
                li.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
                li.innerHTML = `
                    <div>
                        <strong>${comment.name}</strong>
                        <small class="text-muted">${comment.email}</small>
                        <p>${comment.body}</p>
                    </div>
                    <div>
                        <button class="btn btn-danger btn-sm" onclick="deleteComment(${comment.id})">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button class="btn btn-primary btn-sm ms-2" onclick="toggleReplyForm(${comment.id})">
                            Reply
                        </button>
                    </div>
                    <div class="mt-3 reply-form" id="replyForm_${comment.id}" style="display: none;">
                        <h6>Reply to ${comment.name}</h6>
                        <form class="mb-3">
                            <div class="mb-3">
                                <textarea class="form-control" rows="2" placeholder="Your reply"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                        </form>
                    </div>
                `;
                commentsList.appendChild(li);
            });
        }

        // Function to add a new comment
        function addComment(content) {
            // Simulating adding comment to the list (not a real backend action)
            const newComment = {
                id: Math.floor(Math.random() * 1000), // Generate a random ID
                name: 'Anonymous User',
                email: 'anonymous@example.com',
                body: content
            };

            const commentsList = document.getElementById('commentsList');
            const li = document.createElement('li');
            li.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
            li.innerHTML = `
                <div>
                    <strong>${newComment.name}</strong>
                    <small class="text-muted">${newComment.email}</small>
                    <p>${newComment.body}</p>
                </div>
                <div>
                    <button class="btn btn-danger btn-sm" onclick="deleteComment(${newComment.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                    <button class="btn btn-primary btn-sm ms-2" onclick="toggleReplyForm(${newComment.id})">
                        Reply
                    </button>
                </div>
                <div class="mt-3 reply-form" id="replyForm_${newComment.id}" style="display: none;">
                    <h6>Reply to ${newComment.name}</h6>
                    <form class="mb-3">
                        <div class="mb-3">
                            <textarea class="form-control" rows="2" placeholder="Your reply"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                    </form>
                </div>
            `;
            commentsList.appendChild(li);
        }

        // Function to handle form submission
        document.getElementById('commentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const content = document.getElementById('commentContent').value.trim();
            if (content) {
                addComment(content);
                document.getElementById('commentForm').reset();
            }
        });

        // Function to toggle reply form visibility
        function toggleReplyForm(commentId) {
            const replyForm = document.getElementById(`replyForm_${commentId}`);
            replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
        }

        // Function to delete a comment (in a real app, this would be handled server-side)
        function deleteComment(commentId) {
            // In this example, we won't actually remove the comment from the list, but you could modify this function to do so.
            alert(`Comment ${commentId} deleted!`);
        }

        // Initial fetch of comments when the page loads
        fetchComments();
    </script> --}}
    @endsection
@endsection
