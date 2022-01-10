import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testobject.ObjectRepository.findWindowsObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testng.keyword.TestNGBuiltinKeywords as TestNGKW
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import com.kms.katalon.core.windows.keyword.WindowsBuiltinKeywords as Windows
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.navigateToUrl('http://localhost/')

WebUI.click(findTestObject('Object Repository/Page_L Tm Anh/a_Log in'))

WebUI.setText(findTestObject('Object Repository/Page_L Tm Anh Log in to the site/input_Username_username'), 'admin')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_L Tm Anh Log in to the site/input_Password_password'), 'eGmz8XUbrLe3vUQiiiujBg==')

WebUI.click(findTestObject('Object Repository/Page_L Tm Anh Log in to the site/button_Log in'))

WebUI.click(findTestObject('Object Repository/Page_Dashboard/a_My courses'))

WebUI.click(findTestObject('Object Repository/Page_My courses/div_Course image'))

WebUI.scrollToElement(findTestObject('Object Repository/Page_Course 1/a_Anh le dep trai  Quiz'), 0)

WebUI.click(findTestObject('Object Repository/Page_Course 1/a_Anh le dep trai  Quiz'))

WebUI.click(findTestObject('Object Repository/Page_1 Anh le dep trai/a_Edit quiz'))

WebUI.click(findTestObject('Object Repository/Page_Editing quiz Anh le dep trai/a_Add'))

WebUI.click(findTestObject('Object Repository/Page_Editing quiz Anh le dep trai/span_from question bank'))

WebUI.click(findTestObject('Object Repository/Page_Editing quiz Anh le dep trai/input_Anh le la ai_q6'))

WebUI.scrollToElement(findTestObject('Object Repository/Page_Editing quiz Anh le dep trai/input_Show all 23_add'), 0)

WebUI.click(findTestObject('Object Repository/Page_Editing quiz Anh le dep trai/input_Show all 23_add'))

WebUI.closeBrowser()
