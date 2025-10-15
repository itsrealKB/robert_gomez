@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head />
                <div class="asign-head mb-0">
                    <p>Messages</p>
                </div>
                <section class="chat-area-section">
                    <div class="container-fluid p-0">
                        <div class="d-flex flex-wrap">
                            <div class="message-left chat-selection-area-container">
                                <div class="chat-selection-area">
                                    <div class="msg-close-btn">
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    </div>
                                    <div class="chat-person-search">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <input class="dashboard-search" type="text"
                                            placeholder="Search Message or Name…">
                                    </div>
                                    <div class="recent-chats">
                                        <div class="chat-person-box">
                                            <div class="cht-per-det cht-per-det2">
                                                <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                                <div class="ch-persona-name">
                                                    <h1>John Mayers</h1>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="ch-persona-active">
                                                <h1>10 min ago</h1>
                                            </div>
                                        </div>
                                        <div class="chat-person-box">
                                            <div class="cht-per-det cht-per-det2">
                                                <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                                <div class="ch-persona-name">
                                                    <h1>John Mayers</h1>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="ch-persona-active">
                                                <h1>10 min ago</h1>
                                            </div>
                                        </div>
                                        <div class="chat-person-box">
                                            <div class="cht-per-det cht-per-det2">
                                                <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                                <div class="ch-persona-name">
                                                    <h1>John Mayers</h1>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="ch-persona-active">
                                                <h1>10 min ago</h1>
                                            </div>
                                        </div>
                                        <div class="chat-person-box">
                                            <div class="cht-per-det cht-per-det2">
                                                <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                                <div class="ch-persona-name">
                                                    <h1>John Mayers</h1>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="ch-persona-active">
                                                <h1>10 min ago</h1>
                                            </div>
                                        </div>
                                        <div class="chat-person-box">
                                            <div class="cht-per-det cht-per-det2">
                                                <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                                <div class="ch-persona-name">
                                                    <h1>John Mayers</h1>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="ch-persona-active">
                                                <h1>10 min ago</h1>
                                            </div>
                                        </div>
                                        <div class="chat-person-box">
                                            <div class="cht-per-det cht-per-det2">
                                                <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                                <div class="ch-persona-name">
                                                    <h1>John Mayers</h1>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                            <div class="ch-persona-active">
                                                <h1>10 min ago</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-right chat-main-area-container">
                                <div class="chat-main-area">
                                    <div class="cht-per-det user-name position-relative">
                                        <img src="{{ asset('assets/web/images/avatar.png') }}" alt="">
                                        <div class="ch-persona-name">
                                            <h1>John Mayers</h1>
                                            <p>Account Manager</p>
                                        </div>
                                        <div class="contact-list">
                                            <i class="fa-solid fa-list"></i>
                                        </div>
                                    </div>
                                    <div class="chat-type-area chat-box" id="chat-box">
                                        <div class="cht-per-det type-chat usertype">
                                            <p class="user-chat-p">Hi Alison, how can I help you?</p>
                                        </div>
                                        <div class="cht-per-det type-chat mytype">
                                            <p class="user-chat-p">Hey John, I have a question regarding my acccount. Do you
                                                have time for a call?</p>
                                        </div>
                                    </div>
                                    <div class="message-sender-area">
                                        <div class="emoji-btn-area">
                                            <div class="">
                                                <button  class="first-btn uk-button uk-button-primary fa-solid fa-face-smile"></button>
                                            </div>
                                            <div class="">
                                                <i class="fa-solid fa-film"></i>
                                            </div>
                                            <div class="">
                                                <input class="chat-file-input" multiple type="file" name="" id="msg-file" hidden>
                                                <label class="chat-file-label" for="msg-file"><i class="fa-solid fa-paperclip"></i></label>
                                            </div>
                                        </div>
                                        <div class="msg-sender-input">
                                            <div style="width: 100%;">
                                                <input type="text" class="send-msg-input" placeholder="Type your message here…">
                                            </div>

                                            <div class="send-msg-btn-area">
                                                <button type="button" class="send-msg-btn">
                                                    <i class="fa-solid fa-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
