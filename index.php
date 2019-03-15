<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>ChatBot</title>

    <?php $connection = mysqli_connect("localhost", "root", "", "chatbot"); ?>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="container clearfix">
      <div class="people-list" id="people-list">
        <div class="search">
          <input type="text" placeholder="search" />
          <i class="fa fa-search"></i>
        </div>
        <ul class="list">
          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 1</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 2</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> left 7 mins ago
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 3</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 4</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 5</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 6</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> left 30 mins ago
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 7</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> left 10 hours ago
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 8</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 9</div>
                <div class="status">
                  <i class="fa fa-circle offline"></i> offline since Oct 28
                </div>
              </div>
            </a>
          </li>

          <li class="clearfix">
            <a style="color: white" href="#">
              <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg"
                alt="avatar"
              />
              <div class="about">
                <div class="name">Bot 10</div>
                <div class="status">
                  <i class="fa fa-circle online"></i> online
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <div class="chat">
        <div class="chat-header clearfix">
          <img src="./img/user.png" style="width: 10%" alt="avatar" />

          <div class="chat-about">
            <div class="chat-with">Chat with Bot</div>
            <div style="color: green" class="chat-num-messages">Online</div>
          </div>
          <i class="fa fa-star"></i>
        </div>
        <!-- end chat-header -->

        <div class="chat-history">
          <ul>
            <!-- <li class="clearfix">
              <div class="message-data align-right">
                <span class="message-data-time">10:10 AM, Today</span> &nbsp;
                &nbsp; <span class="message-data-name">You</span>
                <i class="fa fa-circle me"></i>
              </div>
              <div class="message other-message float-right">
                Hi Vincent, how are you? How is the project coming along?
              </div>
            </li> -->

            <li>
              <div class="message-data">
                <span class="message-data-name"
                  ><i class="fa fa-circle online"></i> Bot</span
                >
                <span class="message-data-time">10:12 AM, Today</span>
              </div>
              <div class="message my-message">
                Hello, Glad to hear from you. How may I help you today?
              </div>
            </li>

            <!-- <li class="clearfix">
              <div class="message-data align-right">
                <span class="message-data-time">10:14 AM, Today</span> &nbsp;
                &nbsp; <span class="message-data-name">You</span>
                <i class="fa fa-circle me"></i>
              </div>
              <div class="message other-message float-right">
                Well I am not sure. The rest of the team is not here yet. Maybe
                in an hour or so? Have you faced any problems at the last phase
                of the project?
              </div>
            </li>

            <li>
              <div class="message-data">
                <span class="message-data-name"
                  ><i class="fa fa-circle online"></i> Bot</span
                >
                <span class="message-data-time">10:20 AM, Today</span>
              </div>
              <div class="message my-message">
                Actually everything was fine. I'm very excited to show this to
                our team.
              </div>
            </li> -->
            <?php
            $fetchOldMessage = mysqli_query($connection, "SELECT * FROM chats");
            while ($row = mysqli_fetch_assoc($fetchOldMessage)) {
              $oldReq = $row['request'];
              $oldRes = $row['response'];

              echo "
              <li class='clearfix'>
                <div class='message-data align-right'>
                  <span class='message-data-time'>10:14 AM, Today</span> &nbsp;
                  &nbsp; <span class='message-data-name'>You</span>
                  <i class='fa fa-circle me'></i>
                </div>
                <div class='message other-message float-right'>
                  $oldReq
                </div>
              </li>

              <li>
                <div class='message-data'>
                  <span class='message-data-name'
                    ><i class='fa fa-circle online'></i> Bot</span
                  >
                  <span class='message-data-time'>10:20 AM, Today</span>
                </div>
                <div class='message my-message'>
                  $oldRes
                </div>
              </li>";

            }
            if(isset($_POST["submit"])) {

              $textValue = $_POST['textValue'];

              if (!empty($textValue)) {

                $getResponse = mysqli_query($connection, "SELECT * FROM response WHERE request LIKE '%$textValue%' ");
                if (!$getResponse) {
                  echo "Error". mysqli_error($connection);
                }
                $count = mysqli_num_rows($getResponse);
                if ($count != 0) {

                  $res = mysqli_fetch_assoc($getResponse);
                  $response = $res['response'];
                  echo "
                  <li class='clearfix'>
                    <div class='message-data align-right'>
                      <span class='message-data-time'>10:14 AM, Today</span> &nbsp;
                      &nbsp; <span class='message-data-name'>You</span>
                      <i class='fa fa-circle me'></i>
                    </div>
                    <div class='message other-message float-right'>
                      $textValue
                    </div>
                  </li>

                  <li>
                    <div class='message-data'>
                      <span class='message-data-name'
                        ><i class='fa fa-circle online'></i> Bot</span
                      >
                      <span class='message-data-time'>10:20 AM, Today</span>
                    </div>
                    <div class='message my-message'>
                      $response
                    </div>
                  </li>";

                  $query = mysqli_query($connection, "INSERT INTO chats (request, response) VALUES ('$textValue', '$response')");

                } else {

                  echo "
                  <li class='clearfix'>
                    <div class='message-data align-right'>
                      <span class='message-data-time'>10:14 AM, Today</span> &nbsp;
                      &nbsp; <span class='message-data-name'>You</span>
                      <i class='fa fa-circle me'></i>
                    </div>
                    <div class='message other-message float-right'>
                      $textValue
                    </div>
                  </li>

                  <li>
                    <div class='message-data'>
                      <span class='message-data-name'
                        ><i class='fa fa-circle online'></i> Bot</span
                      >
                      <span class='message-data-time'>10:20 AM, Today</span>
                    </div>
                    <div class='message my-message'>
                      Sorry! No response found !
                    </div>
                  </li>";

                }
              }
            }
            ?>
            <li>
              <div class="message-data">
                <!-- <span class="message-data-name"
                  ><i class="fa fa-circle online"></i> Bot</span
                >
                <span class="message-data-time">10:31 AM, Today</span>-->
              </div>
              <i class="fa fa-circle online"></i>
              <i class="fa fa-circle online" style="color: #AED2A6"></i>
              <i class="fa fa-circle online" style="color:#DAE9DA"></i>
            </li>
          </ul>
        </div>
        <!-- end chat-history -->

        <div class="chat-message clearfix">
          <!-- <textarea
            name="message-to-send"
            id="message-to-send"
            placeholder="Type your message"
            rows="3"
          ></textarea> -->

          <form method="post">
            <textarea name="textValue" placeholder="Type your message" rows="3"></textarea>
            <button name="submit" type="submit">Send</button>
          </form>

        </div>
        <!-- end chat-message -->
      </div>
      <!-- end chat -->
    </div>
    <!-- end container -->

    <script id="message-template" type="text/x-handlebars-template">
      <li class="clearfix">
        <div class="message-data align-right">
          <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
          <span class="message-data-name" >You</span> <i class="fa fa-circle me"></i>
        </div>
        <div class="message other-message float-right">
          {{messageOutput}}
        </div>
      </li>
    </script>

    <script id="message-response-template" type="text/x-handlebars-template">
      <li>
        <div class="message-data">
          <span class="message-data-name"><i class="fa fa-circle online"></i> Bot</span>
          <span class="message-data-time">{{time}}, Today</span>
        </div>
        <div class="message my-message">
          {{response}}
        </div>
      </li>
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>

    <script src="js/index.js"></script>
  </body>
</html>
