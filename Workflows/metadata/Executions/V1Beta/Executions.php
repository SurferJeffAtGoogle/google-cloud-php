<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/executions/v1beta/executions.proto

namespace GPBMetadata\Google\Cloud\Workflows\Executions\V1Beta;

class Executions
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a81170a39676f6f676c652f636c6f75642f776f726b666c6f77732f657865637574696f6e732f7631626574612f657865637574696f6e732e70726f746f1228676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574611a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22f8040a09457865637574696f6e12110a046e616d651801200128094203e0410312330a0a73746172745f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312310a08656e645f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e04103124d0a05737461746518042001280e32392e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e2e53746174654203e0410312100a08617267756d656e7418052001280912130a06726573756c741806200128094203e04103124d0a056572726f7218072001280b32392e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e2e4572726f724203e0410312210a14776f726b666c6f775f7265766973696f6e5f69641808200128094203e041031a290a054572726f72120f0a077061796c6f6164180120012809120f0a07636f6e7465787418022001280922540a05537461746512150a1153544154455f554e5350454349464945441000120a0a064143544956451001120d0a095355434345454445441002120a0a064641494c45441003120d0a0943414e43454c4c454410043a8601ea4182010a2b776f726b666c6f77657865637574696f6e732e676f6f676c65617069732e636f6d2f457865637574696f6e125370726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f776f726b666c6f77732f7b776f726b666c6f777d2f657865637574696f6e732f7b657865637574696f6e7d22c5010a154c697374457865637574696f6e735265717565737412390a06706172656e741801200128094229e04102fa41230a21776f726b666c6f77732e676f6f676c65617069732e636f6d2f576f726b666c6f7712110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e180320012809124a0a047669657718042001280e32372e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e566965774203e04101227a0a164c697374457865637574696f6e73526573706f6e736512470a0a657865637574696f6e7318012003280b32332e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e12170a0f6e6578745f706167655f746f6b656e18022001280922a0010a16437265617465457865637574696f6e5265717565737412390a06706172656e741801200128094229e04102fa41230a21776f726b666c6f77732e676f6f676c65617069732e636f6d2f576f726b666c6f77124b0a09657865637574696f6e18022001280b32332e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e4203e0410222a4010a13476574457865637574696f6e5265717565737412410a046e616d651801200128094233e04102fa412d0a2b776f726b666c6f77657865637574696f6e732e676f6f676c65617069732e636f6d2f457865637574696f6e124a0a047669657718022001280e32372e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e566965774203e04101225b0a1643616e63656c457865637574696f6e5265717565737412410a046e616d651801200128094233e04102fa412d0a2b776f726b666c6f77657865637574696f6e732e676f6f676c65617069732e636f6d2f457865637574696f6e2a440a0d457865637574696f6e56696577121e0a1a455845435554494f4e5f564945575f554e535045434946494544100012090a054241534943100112080a0446554c4c100232f3070a0a457865637574696f6e7312e4010a0e4c697374457865637574696f6e73123f2e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e4c697374457865637574696f6e73526571756573741a402e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e4c697374457865637574696f6e73526573706f6e7365224f82d3e4930240123e2f7631626574612f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f77732f2a7d2f657865637574696f6e73da4106706172656e7412ee010a0f437265617465457865637574696f6e12402e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e437265617465457865637574696f6e526571756573741a332e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e226482d3e493024b223e2f7631626574612f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f77732f2a7d2f657865637574696f6e733a09657865637574696f6eda4110706172656e742c657865637574696f6e12d1010a0c476574457865637574696f6e123d2e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e476574457865637574696f6e526571756573741a332e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e224d82d3e4930240123e2f7631626574612f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f77732f2a2f657865637574696f6e732f2a7dda41046e616d6512e1010a0f43616e63656c457865637574696f6e12402e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e43616e63656c457865637574696f6e526571756573741a332e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e7631626574612e457865637574696f6e225782d3e493024a22452f7631626574612f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f776f726b666c6f77732f2a2f657865637574696f6e732f2a7d3a63616e63656c3a012ada41046e616d651a55ca4121776f726b666c6f77657865637574696f6e732e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42f9010a2c636f6d2e676f6f676c652e636c6f75642e776f726b666c6f77732e657865637574696f6e732e763162657461420f457865637574696f6e7350726f746f50015a52676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f776f726b666c6f77732f657865637574696f6e732f7631626574613b657865637574696f6e73ea41610a21776f726b666c6f77732e676f6f676c65617069732e636f6d2f576f726b666c6f77123c70726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f776f726b666c6f77732f7b776f726b666c6f777d620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
