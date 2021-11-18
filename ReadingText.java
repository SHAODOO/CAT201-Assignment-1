import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;

import java.io.File;
import java.io.IOException;
import java.io.FileWriter;

public class ReadingText {

    public static void main(String args[]) throws IOException {

        //Loading an existing document
        File file = new File("C:\\Users\\User\\OneDrive - Universiti Sains Malaysia\\Laptop\\CAT201_ASSIGNMENT_1\\CAT201_2021-assignment1.pdf");
        PDDocument document = PDDocument.load(file);

        //Instantiate PDFTextStripper class
        PDFTextStripper pdfStripper = new PDFTextStripper();

        //Retrieving text from PDF document
        String text = pdfStripper.getText(document);
        //System.out.println(text);

        //Closing the document
        document.close();

        FileWriter myWriter = new FileWriter("C:\\Users\\User\\OneDrive - Universiti Sains Malaysia\\Laptop\\CAT201_ASSIGNMENT_1\\text.txt");

        myWriter.write(text);

        myWriter.close();

        System.out.println("File successfully converted to .txt file");
    }
}
