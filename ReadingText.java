//Import Apache PDFBox external library
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

//Import Java library
import java.io.File;
import java.io.IOException;
import java.io.FileWriter;

public class ReadingText {

    public static void main(String args[]) throws IOException {

        //Loading an existing document
        File file = new File("C:\\Users\\User\\OneDrive - Universiti Sains Malaysia\\Laptop\\CAT201_ASSIGNMENT_1\\upload\\upload.pdf");
        PDDocument pdfFile = PDDocument.load(file);

        //Instantiate PDFTextStripper class
        PDFTextStripper pdfStripper = new PDFTextStripper();

        //Retrieving text from PDF document
        String text = pdfStripper.getText(pdfFile);
        //System.out.println(text);

        //Closing the document
        pdfFile.close();

        FileWriter convertedTxtFile = new FileWriter("C:\\Users\\User\\OneDrive - Universiti Sains Malaysia\\Laptop\\CAT201_ASSIGNMENT_1\\download\\text.txt");

        convertedTxtFile.write(text);

        convertedTxtFile.close();

        System.out.println(text);
    }
}
