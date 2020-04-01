# XSS防护
 * 输入处过滤
 * 输出处转译
 * http头保护
 * CSP防护


# 转码

## html编码

   ### built-in function    
    * [htmlspecialchars]
    (https://www.php.net/htmlspecialchars)

    * [htmlentities]
    (https://www.phpnet/htmlentities)
    
   ### 问题
    * htmlspecialchars/htmlentities: `ENT_COMPAT`: 默认转单引号不转双引，`ENT_QUOTES`: 都转  `ENT_NOQUOTES`都不转

    * 适用于代码插入处在html代码区域中
    



