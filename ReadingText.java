//Import Apache PDFBox external library
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

//Import Java library
import java.io.File;
import java.io.IOException;
import java.io.FileWriter;

public class ReadingText {

    public static void main(String args[]) throws IOException {

        //Load the upload.pdf
        File file = new File("C:\\Users\\User\\OneDrive - Universiti Sains Malaysia\\Laptop\\CAT201_ASSIGNMENT_1\\upload\\upload.pdf");
        PDDocument pdfFile = PDDocument.load(file);

        //Instantiate PDFTextStripper class
        PDFTextStripper pdfStripper = new PDFTextStripper();

        //Retrieving text from upload.pdf
        String text = pdfStripper.getText(pdfFile);

        //Close upload.pdf
        pdfFile.close();

        //Load the text.txt
        FileWriter convertedTxtFile = new FileWriter("C:\\Users\\User\\OneDrive - Universiti Sains Malaysia\\Laptop\\CAT201_ASSIGNMENT_1\\download\\text.txt");

        //Write the converted text to text.txt
        convertedTxtFile.write(text);

        //Close text.txt
        convertedTxtFile.close();
    }
}
