package com.shinc.duobaohui.http;

import android.content.Context;


import com.lidroid.xutils.exception.HttpException;
import com.lidroid.xutils.http.RequestParams;
import com.lidroid.xutils.http.ResponseInfo;
import com.lidroid.xutils.http.client.HttpRequest;
import com.shinc.duobaohui.bean.WeComeBean;
import com.shinc.duobaohui.event.WecomeEvent;
import com.shinc.duobaohui.utils.web.GsonUtil;
import com.shinc.duobaohui.utils.web.HttpSendInterFace;
import com.shinc.duobaohui.utils.web.MyHttpUtils;

import java.util.List;

import de.greenrobot.event.EventBus;

/**
 * Created by liugaopo on 15/12/15.
 */
public class WecomeRequest implements HttpSendInterFace {
    @Override
    public void sendPostRequest(RequestParams requestParams, String url, final Context context) {
        MyHttpUtils.getInstance().send(HttpRequest.HttpMethod.POST, url, requestParams, true, false, context, new MyHttpUtils.MyRequestCallBack() {
            WeComeBean bean;

            @Override
            public void onSuccess(ResponseInfo<String> responseInfo) {
                bean = GsonUtil.json2Bean(context, responseInfo.result, WeComeBean.class);
                EventBus.getDefault().post(new WecomeEvent(bean));
            }

            @Override
            public void onFailure(HttpException e, String s) {
                EventBus.getDefault().post(new WecomeEvent(bean));
            }
        });
    }

    @Override
    public void sendPostRequest(RequestParams requestParams, String url, List<String> request, Context context) {

    }
}
