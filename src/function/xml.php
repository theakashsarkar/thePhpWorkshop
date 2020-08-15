<?php
$document = new DomDocument();
$document->load($pathToXmlFile1);
$document1 = new DomDocument();
$documnet->load($pathToXmlFile2);
$document3 = [$documnet,$document1];
$processedDocuments = processDocuments(...$documnet);
foreach(processDocuments(...$documents) as $transformedDocument) {
    // .. do something with it
}