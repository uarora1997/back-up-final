<?php
// This file was auto-generated from sdk-root/src/data/proton/2020-07-20/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-northeast-1', ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.eu-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-west-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-east-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-2', ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-west-2', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://proton.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For custom endpoint with region set and fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with region not set and fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'Missing region', 'expect' => [ 'error' => 'Invalid Configuration: Missing Region', ], ], ], 'version' => '1.0',];
