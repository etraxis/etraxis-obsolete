<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaconQrCode\\Common\\AbstractEnum' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/AbstractEnum.php',
    'BaconQrCode\\Common\\BitArray' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/BitArray.php',
    'BaconQrCode\\Common\\BitMatrix' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/BitMatrix.php',
    'BaconQrCode\\Common\\BitUtils' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/BitUtils.php',
    'BaconQrCode\\Common\\CharacterSetEci' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/CharacterSetEci.php',
    'BaconQrCode\\Common\\EcBlock' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/EcBlock.php',
    'BaconQrCode\\Common\\EcBlocks' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/EcBlocks.php',
    'BaconQrCode\\Common\\ErrorCorrectionLevel' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/ErrorCorrectionLevel.php',
    'BaconQrCode\\Common\\FormatInformation' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/FormatInformation.php',
    'BaconQrCode\\Common\\Mode' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/Mode.php',
    'BaconQrCode\\Common\\ReedSolomonCodec' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/ReedSolomonCodec.php',
    'BaconQrCode\\Common\\Version' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Common/Version.php',
    'BaconQrCode\\Encoder\\BlockPair' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Encoder/BlockPair.php',
    'BaconQrCode\\Encoder\\ByteMatrix' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Encoder/ByteMatrix.php',
    'BaconQrCode\\Encoder\\Encoder' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Encoder/Encoder.php',
    'BaconQrCode\\Encoder\\MaskUtil' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Encoder/MaskUtil.php',
    'BaconQrCode\\Encoder\\MatrixUtil' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Encoder/MatrixUtil.php',
    'BaconQrCode\\Encoder\\QrCode' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Encoder/QrCode.php',
    'BaconQrCode\\Exception\\ExceptionInterface' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Exception/ExceptionInterface.php',
    'BaconQrCode\\Exception\\InvalidArgumentException' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Exception/InvalidArgumentException.php',
    'BaconQrCode\\Exception\\OutOfBoundsException' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Exception/OutOfBoundsException.php',
    'BaconQrCode\\Exception\\RuntimeException' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Exception/RuntimeException.php',
    'BaconQrCode\\Exception\\UnexpectedValueException' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Exception/UnexpectedValueException.php',
    'BaconQrCode\\Exception\\WriterException' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Exception/WriterException.php',
    'BaconQrCode\\Renderer\\Color\\Cmyk' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Color/Cmyk.php',
    'BaconQrCode\\Renderer\\Color\\ColorInterface' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Color/ColorInterface.php',
    'BaconQrCode\\Renderer\\Color\\Gray' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Color/Gray.php',
    'BaconQrCode\\Renderer\\Color\\Rgb' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Color/Rgb.php',
    'BaconQrCode\\Renderer\\Image\\AbstractRenderer' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/AbstractRenderer.php',
    'BaconQrCode\\Renderer\\Image\\Decorator\\DecoratorInterface' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/Decorator/DecoratorInterface.php',
    'BaconQrCode\\Renderer\\Image\\Decorator\\FinderPattern' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/Decorator/FinderPattern.php',
    'BaconQrCode\\Renderer\\Image\\Eps' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/Eps.php',
    'BaconQrCode\\Renderer\\Image\\Png' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/Png.php',
    'BaconQrCode\\Renderer\\Image\\RendererInterface' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/RendererInterface.php',
    'BaconQrCode\\Renderer\\Image\\Svg' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Image/Svg.php',
    'BaconQrCode\\Renderer\\RendererInterface' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/RendererInterface.php',
    'BaconQrCode\\Renderer\\Text\\Html' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Text/Html.php',
    'BaconQrCode\\Renderer\\Text\\Plain' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Renderer/Text/Plain.php',
    'BaconQrCode\\Writer' => $vendorDir . '/bacon/bacon-qr-code/src/BaconQrCode/Writer.php',
    'ParagonIE\\ConstantTime\\Base32' => $vendorDir . '/paragonie/constant_time_encoding/src/Base32.php',
    'ParagonIE\\ConstantTime\\Base32Hex' => $vendorDir . '/paragonie/constant_time_encoding/src/Base32Hex.php',
    'ParagonIE\\ConstantTime\\Base64' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64.php',
    'ParagonIE\\ConstantTime\\Base64DotSlash' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64DotSlash.php',
    'ParagonIE\\ConstantTime\\Base64DotSlashOrdered' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64DotSlashOrdered.php',
    'ParagonIE\\ConstantTime\\Base64UrlSafe' => $vendorDir . '/paragonie/constant_time_encoding/src/Base64UrlSafe.php',
    'ParagonIE\\ConstantTime\\Binary' => $vendorDir . '/paragonie/constant_time_encoding/src/Binary.php',
    'ParagonIE\\ConstantTime\\EncoderInterface' => $vendorDir . '/paragonie/constant_time_encoding/src/EncoderInterface.php',
    'ParagonIE\\ConstantTime\\Encoding' => $vendorDir . '/paragonie/constant_time_encoding/src/Encoding.php',
    'ParagonIE\\ConstantTime\\Hex' => $vendorDir . '/paragonie/constant_time_encoding/src/Hex.php',
    'ParagonIE\\ConstantTime\\RFC4648' => $vendorDir . '/paragonie/constant_time_encoding/src/RFC4648.php',
    'PragmaRX\\Google2FA\\Exceptions\\IncompatibleWithGoogleAuthenticatorException' => $baseDir . '/src/Exceptions/IncompatibleWithGoogleAuthenticatorException.php',
    'PragmaRX\\Google2FA\\Exceptions\\InsecureCallException' => $baseDir . '/src/Exceptions/InsecureCallException.php',
    'PragmaRX\\Google2FA\\Exceptions\\InvalidCharactersException' => $baseDir . '/src/Exceptions/InvalidCharactersException.php',
    'PragmaRX\\Google2FA\\Exceptions\\SecretKeyTooShortException' => $baseDir . '/src/Exceptions/SecretKeyTooShortException.php',
    'PragmaRX\\Google2FA\\Google2FA' => $baseDir . '/src/Google2FA.php',
    'PragmaRX\\Google2FA\\Support\\Base32' => $baseDir . '/src/Support/Base32.php',
    'PragmaRX\\Google2FA\\Support\\Constants' => $baseDir . '/src/Support/Constants.php',
    'PragmaRX\\Google2FA\\Support\\QRCode' => $baseDir . '/src/Support/QRCode.php',
    'PragmaRX\\Google2FA\\Support\\Url' => $baseDir . '/src/Support/Url.php',
    'Symfony\\Polyfill\\Php56\\Php56' => $vendorDir . '/symfony/polyfill-php56/Php56.php',
    'Symfony\\Polyfill\\Util\\Binary' => $vendorDir . '/symfony/polyfill-util/Binary.php',
    'Symfony\\Polyfill\\Util\\BinaryNoFuncOverload' => $vendorDir . '/symfony/polyfill-util/BinaryNoFuncOverload.php',
    'Symfony\\Polyfill\\Util\\BinaryOnFuncOverload' => $vendorDir . '/symfony/polyfill-util/BinaryOnFuncOverload.php',
    'Symfony\\Polyfill\\Util\\LegacyTestListener' => $vendorDir . '/symfony/polyfill-util/LegacyTestListener.php',
    'Symfony\\Polyfill\\Util\\TestListener' => $vendorDir . '/symfony/polyfill-util/TestListener.php',
    'Symfony\\Polyfill\\Util\\TestListenerTrait' => $vendorDir . '/symfony/polyfill-util/TestListenerTrait.php',
);