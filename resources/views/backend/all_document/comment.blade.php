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
                <div class="col-lg-8 col-md-6 col-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tiger Nixon</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-3">Add a Comment</h5>
                            <form id="addCommentForm">
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
    
            <div class="row mt-4">
                <div class="col-lg-8 col-md-6 col-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">All Comments</h5>
                            <ul class="list-group" id="commentsList">
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>John Doe</strong>
                                            <small class="text-muted">john.doe@example.com</small>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button class="btn btn-primary btn-sm ms-2 reply-button">
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-3 reply-form" style="display: none;">
                                        <h6>Reply to John Doe</h6>
                                        <form>
                                            <div class="mb-3">
                                                <textarea class="form-control" rows="2" placeholder="Your reply"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                                        </form>
                                    </div>
                                    <div class="mt-3 replies" style="display: none;">
                                        <h6>Replies</h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">Reply 1</li>
                                            <li class="list-group-item">Reply 2</li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-secondary btn-sm mt-2 show-replies-button">Show Replies</button>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>Jane Smith</strong>
                                            <small class="text-muted">jane.smith@example.com</small>
                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <div>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button class="btn btn-primary btn-sm ms-2 reply-button">
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mt-3 reply-form" style="display: none;">
                                        <h6>Reply to Jane Smith</h6>
                                        <form>
                                            <div class="mb-3">
                                                <textarea class="form-control" rows="2" placeholder="Your reply"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-sm">Submit Reply</button>
                                        </form>
                                    </div>
                                    <div class="mt-3 replies" style="display: none;">
                                        <h6>Replies</h6>
                                        <ul class="list-group">
                                            <li class="list-group-item">Reply 1</li>
                                            <li class="list-group-item">Reply 2</li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-secondary btn-sm mt-2 show-replies-button">Show Replies</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @section('javascript-section')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Toggle reply form
                document.querySelectorAll('.reply-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const replyForm = this.closest('li').querySelector('.reply-form');
                        replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
                    });
                });

                // Toggle replies
                document.querySelectorAll('.show-replies-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const replies = this.closest('li').querySelector('.replies');
                        replies.style.display = replies.style.display === 'none' ? 'block' : 'none';
                        this.textContent = replies.style.display === 'none' ? 'Show Replies' : 'Hide Replies';
                    });
                });
            });
        </script>
    @endsection
@endsection
