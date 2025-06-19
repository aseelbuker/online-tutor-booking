@extends('layouts.adminPnl')
@section('title', 'Notification Management')
@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-2 text-primary">Notification Management</h1>
    <p class="mb-4 text-muted">Send announcements and manage platform notifications</p>
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs mb-3" id="notificationTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="send-tab" data-bs-toggle="tab" data-bs-target="#send" type="button" role="tab">Send Notification</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab">Notification History</button>
                </li>
            </ul>
            <div class="tab-content" id="notificationTabsContent">
                <div class="tab-pane fade show active" id="send" role="tabpanel">
                    <form class="mb-0">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Recipient Type</label>
                                <select class="form-select">
                                    <option selected>Select recipient type</option>
                                    <option>All Users</option>
                                    <option>All Students</option>
                                    <option>All Tutors</option>
                                    <option>Active Students</option>
                                    <option>Active Tutors</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Notification Title</label>
                                <input type="text" class="form-control" placeholder="Enter notification title">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="3" placeholder="Enter your notification message..."></textarea>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="button" class="btn btn-outline-secondary">Save as Draft</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane me-1"></i>Send Notification</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="history" role="tabpanel">
                    <h5 class="mb-3 mt-3"><i class="fas fa-bell me-2"></i>Sent Notifications</h5>
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold">Platform Maintenance <span class="badge bg-secondary ms-2">All Users</span> <span class="badge bg-success ms-2">sent</span></div>
                                <div class="text-muted small">Scheduled maintenance will occur on Sunday from 2-4 AM EST.</div>
                                <div class="text-muted small mt-1">Sent: 2024-05-25 <i class="fas fa-users ms-2"></i> 234 reads</div>
                            </div>
                            <div>
                                <a href="#" class="text-info me-3"><i class="fas fa-eye"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold">New Feature Available <span class="badge bg-secondary ms-2">All Tutors</span> <span class="badge bg-success ms-2">sent</span></div>
                                <div class="text-muted small">Check out our new video calling feature for enhanced sessions.</div>
                                <div class="text-muted small mt-1">Sent: 2024-05-24 <i class="fas fa-users ms-2"></i> 45 reads</div>
                            </div>
                            <div>
                                <a href="#" class="text-info me-3"><i class="fas fa-eye"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="fw-bold">Payment Processing Update <span class="badge bg-secondary ms-2">All Students</span> <span class="badge bg-success ms-2">sent</span></div>
                                <div class="text-muted small">Important updates to our payment processing system.</div>
                                <div class="text-muted small mt-1">Sent: 2024-05-23 <i class="fas fa-users ms-2"></i> 189 reads</div>
                            </div>
                            <div>
                                <a href="#" class="text-info me-3"><i class="fas fa-eye"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 