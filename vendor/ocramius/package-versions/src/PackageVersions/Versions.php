<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.2@b9d758e831c70751155c698c2f7df4665314a1cb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/doctrine-bundle' => '2.0.8@b0e0deb6e700438401ede433a15a6372d2285202',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.8@fc8eff5841b549fbd66f89e1fd7cfb6a823ee512',
  'symfony/cache' => 'v4.4.8@ba0aa1738d04df338c0fabdbecf9cf5fddcdb63f',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v4.4.8@8ba41fe053683e1e6e3f6fa21f07ea5c4dd9e4c0',
  'symfony/console' => 'v4.4.8@10bb3ee3c97308869d53b3e3d03f6ac23ff985f7',
  'symfony/debug' => 'v4.4.8@346636d2cae417992ecfd761979b2ab98b339a45',
  'symfony/dependency-injection' => 'v4.4.8@9d0c2807962f7f12264ab459f48fb541dbd386bd',
  'symfony/doctrine-bridge' => 'v4.4.8@642cb1000331b8dc5568587f60aeb299070f9a55',
  'symfony/dotenv' => 'v4.4.8@a78e698cfb8aca8ef6814639eb5ffc17180a4326',
  'symfony/error-handler' => 'v4.4.8@7e9828fc98aa1cf27b422fe478a84f5b0abb7358',
  'symfony/event-dispatcher' => 'v4.4.8@abc8e3618bfdb55e44c8c6a00abd333f831bbfed',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v4.4.8@a3ebf3bfd8a98a147c010a568add5a8aa4edea0f',
  'symfony/finder' => 'v4.4.8@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v4.4.8@505299904397a7c6d515a7c03cdbc1b4a1d4a21f',
  'symfony/framework-bundle' => 'v4.4.8@fdacdf191a71aef94e05b64319868f4d06fe509c',
  'symfony/http-foundation' => 'v4.4.8@ec5bd254c223786f5fa2bb49a1e705c1b8e7cee2',
  'symfony/http-kernel' => 'v4.4.8@1799a6c01f0db5851f399151abdb5d6393fec277',
  'symfony/inflector' => 'v4.4.8@53cfa47fe9142f39b5605df67bada3893dd4f46c',
  'symfony/intl' => 'v4.4.8@040f10fde20ae35e8623771ba8a733508c87aa6a',
  'symfony/mime' => 'v4.4.8@7a583ffb6c7dd5aabb5db920817a3cc39261c517',
  'symfony/options-resolver' => 'v4.4.8@ade3d89dd3b875b83c8cff2980c9bb0daf6ef297',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.15.0@9c281272735eb66476e0fa7381e03fb0d4b60197',
  'symfony/polyfill-intl-idn' => 'v1.15.0@47bd6aa45beb1cd7c6a16b7d1810133b728bdfcf',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php72' => 'v1.15.0@37b0976c78b94856543260ce09b460a7bc852747',
  'symfony/polyfill-php73' => 'v1.15.0@0f27e9f464ea3da33cbe7ca3bdf4eb66def9d0f7',
  'symfony/property-access' => 'v4.4.8@f6a51bd76a3a5c36c57221a4f491b9cf02663672',
  'symfony/routing' => 'v4.4.8@67b4e1f99c050cbc310b8f3d0dbdc4b0212c052c',
  'symfony/security-bundle' => 'v4.4.8@dd1641ab03f2dd62e7aa0de8efd80cee20d585ff',
  'symfony/security-core' => 'v4.4.8@fc84e9481e5bd9d80f70c0d8151601211377a5dc',
  'symfony/security-csrf' => 'v4.4.8@286a71ff176e1b0dd071f0e73dcec0970a56634b',
  'symfony/security-guard' => 'v4.4.8@d2ba618ed2a52f37dd74fb2c52a14388beddd5fc',
  'symfony/security-http' => 'v4.4.8@055a4f4fe58ab19515fa573919bf7ebd114f4aa7',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v4.4.8@e0324d3560e4128270e3f08617480d9233d81cfc',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v4.4.8@d64035d0d6b3dbeed3a6839e3833779aaecf3513',
  'symfony/twig-bundle' => 'v4.4.8@79046e5189c5f4da923f395ccc11db930953c990',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.8@1780dff34d756f924ed7bb4f1cd94a7f9685eb69',
  'symfony/var-dumper' => 'v4.4.8@c587e04ce5d1aa62d534a038f574d9a709e814cf',
  'symfony/var-exporter' => 'v4.4.8@6e95bdca4a4604da6c148729972d4b627a034b13',
  'symfony/yaml' => 'v4.4.8@b385dce1c0e9f839b384af90188638819433e252',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'symfony/maker-bundle' => 'v1.15.1@ae95a2b7fa8272e75630c273396097074f23e03f',
  'symfony/process' => 'v4.4.8@4b6a9a4013baa65d409153cbb5a895bf093dc7f4',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/web-profiler-bundle' => 'v4.4.8@aaeaa6a620e0187ea3107bdd4030a8b284f7e89d',
  'symfony/web-server-bundle' => 'v4.4.2@301dad4563b21a791a796da9a736408215b9e9fc',
  'paragonie/random_compat' => '2.*@0d30eaa88938acedcb44092b1a646d0045279cfe',
  'symfony/polyfill-ctype' => '*@0d30eaa88938acedcb44092b1a646d0045279cfe',
  'symfony/polyfill-iconv' => '*@0d30eaa88938acedcb44092b1a646d0045279cfe',
  'symfony/polyfill-php71' => '*@0d30eaa88938acedcb44092b1a646d0045279cfe',
  'symfony/polyfill-php70' => '*@0d30eaa88938acedcb44092b1a646d0045279cfe',
  'symfony/polyfill-php56' => '*@0d30eaa88938acedcb44092b1a646d0045279cfe',
  '__root__' => 'dev-master@0d30eaa88938acedcb44092b1a646d0045279cfe',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
