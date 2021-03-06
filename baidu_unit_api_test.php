<?php
/**
 * 发起http post请求(REST API), 并获取REST请求的结果
 * @param string $url
 * @param string $param
 * @return - http response body if succeeds, else false.
 */


    // 首先获取token
    $url_token = 'https://aip.baidubce.com/oauth/2.0/token';
    $post_data['grant_type']       = 'client_credentials';
    $post_data['client_id']      = '*****'; // UNIT应用列表中的API key
    $post_data['client_secret'] = '*****'; // UNIT应用列表中的Secret key
    $o = "";
    foreach ( $post_data as $k => $v )
    {
     $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);
    $token = request_post($url_token, $post_data);

    // 展示token
    // var_dump(json_decode($token , true));die;

    $token = json_decode($token , true);
    $token = $token['access_token'];

    // 再进行对话与管理，具体请求参数请参考《百度UNIT BOT管理API》

    // 获取意图列表与意图id------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/intent/list?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentType'] = "faq";
    // $bodys_arr['pageNo'] = "1";
    // $bodys_arr['pageSize'] = "200";
    // 获取意图列表与意图id------------------------------------------结束

    // 添加意图------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/intent/add?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentData'] = [];
    // $bodys_arr['intentData']['intentName'] = 'FAQ_TEST';
    // $bodys_arr['intentData']['intentClarifyName'] = '测试';
    // $bodys_arr['intentData']['intentType'] = 'faq';
    // $bodys_arr['intentData'] = (object)$bodys_arr['intentData'];
    // 添加意图------------------------------------------结束

    // 查询意图------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/intent/info?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentId'] = "*****";
    // 查询意图------------------------------------------结束

    // 更改意图------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/intent/update?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentData']['intentId'] = $value['id'];
    // $bodys_arr['intentData']['intentType'] = "faq";
    // $bodys_arr['intentData']['intentClarifyName'] = "测试";
    // $bodys_arr['intentData']['sluTags'][] = "TEST";
    // 更改意图------------------------------------------结束

    // 添加问答意图中的问答对------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/faq/add?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentId'] = "*****";
    // $bodys_arr['faqQuestions'] = [];
    // $bodys_arr['faqQuestions'][] = (object)['question'=>'测试问题'];
    // $bodys_arr['faqAnswers'] = [];
    // $bodys_arr['faqAnswers'][] = (object)['answer'=>'测试回答'];
    // $bodys_arr['sluTags'] = [];
    // $bodys_arr['sluTags'][] = 'TEST';
    // 添加问答意图中的问答对------------------------------------------结束

    // 获取问答意图中的问答对------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/faq/list?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentId'] = "*****";
    // $bodys_arr['pageNo'] = "1";
    // $bodys_arr['pageSize'] = "200";
    // 获取问答意图中的问答对------------------------------------------结束

    // 删除问答意图中的问答对------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/faq/delete?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentId'] = "*****";
    // $bodys_arr['faqId'] = "*******";
    // 删除问答意图中的问答对------------------------------------------结束

    // 更改问答意图中的问答对------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/faq/update?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['skillId'] = "0";
    // $bodys_arr['intentId'] = "*****";
    // $bodys_arr['faqId'] = "*******";
    // $bodys_arr['faqQuestions'] = [];
    // $bodys_arr['faqQuestions'][] = (object)['question'=>'测试问题'];
    // $bodys_arr['faqAnswers'] = [];
    // $bodys_arr['faqAnswers'][] = (object)['answer'=>'测试回答'];
    // $bodys_arr['sluTags'] = [];
    // $bodys_arr['sluTags'][] = 'TEST';
    // 更改问答意图中的问答对------------------------------------------结束

    // 获取样本包列表------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/querySet/list?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['pageNo'] = "1";
    // $bodys_arr['pageSize'] = "200";
    // 获取样本包列表------------------------------------------结束

    // 新增样本包------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/querySet/add?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['querySetName'] = "测试样本包";
    // 新增样本包------------------------------------------结束

    // 新增样本------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/query/add?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['querySetId'] = "****";
    // $bodys_arr['query'] = [];
    // $bodys_arr['query']['queryString'] = "测试";
    // $bodys_arr['query']['intentId'] = "*****";
    // $bodys_arr['query'] = json_encode($bodys_arr['query']);
    // 新增样本------------------------------------------结束

    // 获取模板包列表------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/patternSet/list?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['pageNo'] = "1";
    // $bodys_arr['pageSize'] = "200";
    // 获取模板包列表------------------------------------------结束

    // 查询模型------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/model/list?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // 查询模型------------------------------------------结束

    // 删除模型------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/model/delete?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['modelId'] = "";
    // 删除模型------------------------------------------结束

    // 训练模型（并生效到沙盒环境）------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/model/train?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['trainOption'] = [];
    // $bodys_arr['trainOption']['configure']['smartqu'] = "true";
    // $bodys_arr['trainOption']['configure']['mlqu'] = "false";
    // $bodys_arr['trainOption']['data']['querySetIds'] = [];
    // $bodys_arr['trainOption']['data']['patternSetIds'] = ["****"];
    // 训练模型（并生效到沙盒环境）------------------------------------------结束

    // 模型部署到生产环境------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/deployment/add?access_token=' . $token;
    // $bodys_arr = [];
    // $bodys_arr['botId'] = "*****";
    // $bodys_arr['region'] = "**";
    // 模型部署到生产环境------------------------------------------结束

    // 对技能进行提问------------------------------------------开始
    $url = 'https://aip.baidubce.com/rpc/2.0/unit/bot/chat?access_token=' . $token;
    $bodys_arr = [];
    $bodys_arr['bot_session'] = "";
    $bodys_arr['log_id'] = "*******";
    $bodys_arr['request']['bernard_level'] = "1";

    $bodys_arr['request']['client_session']['client_results'] = "";
    $bodys_arr['request']['client_session']['candidate_options'] = [];
    $bodys_arr['request']['client_session'] = json_encode($bodys_arr['request']['client_session']);

    $bodys_arr['request']['query'] = "测试问题";
    $bodys_arr['request']['query_info']['asr_candidates'] = [];
    $bodys_arr['request']['query_info']['source'] = "KEYBOARD";
    $bodys_arr['request']['query_info']['type'] = "TEXT";

    $bodys_arr['request']['hyper_params'] = [];
    $bodys_arr['request']['hyper_params']['slu_threshold'] = "0.5";
    $bodys_arr['request']['hyper_params']['slu_level'] = "1";
    $bodys_arr['request']['hyper_params']['slu_tags'][] = "TEST";

    $bodys_arr['request']['user_id'] = "*****";
    $bodys_arr['bot_id'] = "*****";
    $bodys_arr['version'] = "2.0";
    // 对技能进行提问------------------------------------------结束

    // 对机器人进行提问------------------------------------------开始
    // $url = 'https://aip.baidubce.com/rpc/2.0/unit/service/chat?access_token=' . $token; // 沙盒环境
    // // $url = 'https://unit.bj.baidubce.com/rpc/2.0/unit/service/chat?access_token=' . $token; // 生产环境
    // $bodys_arr = [];
    //
    // $bodys_arr['version'] = "2.0";
    // // $bodys_arr['service_id'] = "******"; // 机器人ID
    // $bodys_arr['skill_ids'][] = "*****"; // 技能ID_1
    // $bodys_arr['skill_ids'][] = "*****"; // 技能ID_2
    // $bodys_arr['skill_ids'][] = "*****"; // 技能ID_3
    // $bodys_arr['session_id'] = "";
    // $bodys_arr['log_id'] = "UNITTEST_10000";
    //
    // $bodys_arr['request']['user_id'] = "88888";
    //
    // $bodys_arr['request']['query'] = "测试问题";
    // $bodys_arr['request']['query_info']['asr_candidates'] = [];
    // $bodys_arr['request']['query_info']['source'] = "KEYBOARD";
    // $bodys_arr['request']['query_info']['type'] = "TEXT";
    //
    // 此处需要填写技能ID
    // $bodys_arr['request']['hyper_params']['*****']['slu_threshold'] = "0.5";
    // $bodys_arr['request']['hyper_params']['*****']['slu_level'] = "1";
    // $bodys_arr['request']['hyper_params']['*****']['slu_tags'][] = "TEST_1";
    // $bodys_arr['request']['hyper_params']['*****']['slu_tags'][] = "TEST_2";
    // 对机器人进行提问------------------------------------------结束


    $bodys_arr = json_encode($bodys_arr , JSON_UNESCAPED_UNICODE);
    // 请求接口
    $res = request_post($url, $bodys_arr);
    // 输出结果
    var_dump(json_decode($res , true));die;


    function request_post($url = '', $param = '')
    {
        if (empty($url) || empty($param)) {
            return false;
        }
        $postUrl = $url;
        $curlPost = $param;
        // 初始化curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $postUrl);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        // 要求结果为字符串且输出到屏幕上
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // post提交方式
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        // 运行curl
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }

?>
